<?php

namespace AhmedAbdelaal\FilamentJsonPreview;

use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Js;
use Filament\Support\Assets\Css;
use Spatie\LaravelPackageTools\Package;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentJsonPreviewServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-json-preview';

    public static string $viewNamespace = 'filament-json-preview';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews(static::$viewNamespace);
    }

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );


        $sourcePath = __DIR__ . '/../resources/dist/jsoneditor-icons.svg';
        $destinationPath = public_path('jsoneditor/jsoneditor-icons.svg');
        // Use the publishes method to copy the images to the public directory
        $this->publishes([
            $sourcePath => $destinationPath,
        ], 'jsoneditor');
    }

    protected function getAssetPackageName(): ?string
    {
        return 'ahmedabdelaal/filament-json-preview';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            Css::make(static::$name, __DIR__ . '/../resources/dist/app.css'),
            Js::make(static::$name, __DIR__ . '/../resources/dist/app2.js'),
        ];
    }
}

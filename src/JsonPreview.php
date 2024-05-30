<?php

namespace AhmedAbdelaal\FilamentJsonPreview;

use Filament\Infolists\Components\Entry;

class JsonPreview extends Entry
{

    protected bool $searchable = false;
    protected bool $showNavigationBar = false;

    protected string $mode = 'view';

    protected string $view = 'filament-json-preview::json';


    protected array $options = [];


    public function searchable(): self
    {
        $this->searchable = true;
        return $this;
    }

    public function showNavigationBar(): self
    {
        $this->showNavigationBar = true;

        return $this;
    }

    public function withOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }


    public function getOptions(): array
    {
        return [
            'mode' => 'view',
            'search' => $this->searchable,
            'navigationBar' => $this->showNavigationBar,
            ...$this->options
        ];
    }

}

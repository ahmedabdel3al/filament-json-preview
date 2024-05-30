# ahmedabdelaal/filament-json-preview

This package seamlessly integrates the powerful JSONEditor library , enabling developers to easily incorporate a robust JSON editor into their Filament projects.
https://github.com/josdejong/jsoneditor

## Installation

You can install the package via composer:

```bash
composer require ahmedabdelaal/filament-json-preview
```

publish the svg icons 
```bash
php artisan vendor:publish --tag=jsoneditor
```
## Usage

```php
public static function infolist(Infolist $infolist): Infolist
{
        return $infolist->schema([
            JsonPreview::make('logs'),
        ]);
}
```

enable search in json

```php
JsonPreview::make('logs')->searchable()
```

show NavigationBar in json

```php
JsonPreview::make('logs')->showNavigationBar()
```


## Contributing

Your contributions are welcome and greatly valued! Please feel free to submit a pull request or create an issue.

## Credits

- [Ahmed Abdelaal](https://github.com/ahmedabdel3al)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

<div class="filam![img_1.png](img_1.png)ent-hidden">
    <h2>default</h2>
    <img src="images/collapse.png" alt="Screenshot"/>
</div>

<div class="filam![img_1.png](img_1.png)ent-hidden">
    <h2>search</h2>
    <img src="images/search.png" alt="Screenshot"/>
</div>

<div class="filam![img_1.png](img_1.png)ent-hidden">
    <h2>navigation bar</h2>
    <img src="images/navigationbar.png" alt="Screenshot"/>
</div>





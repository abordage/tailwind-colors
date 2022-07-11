# Generate color palette for Laravel Nova (or another project using tailwind.css) 

The `/dist/tailwind-colors.css` file already contains the generated palette for Laravel Nova [Badge Field](https://nova.laravel.com/docs/4.0/resources/fields.html#badge-field).

1. Copy `tailwind-colors.css` to public dir (e.g. `css/tailwind-colors.css`) or set your `webpack.mix.js` | `vite.config.ts` for copy
2. Include styles in a file `resources/views/vendor/nova/partials/meta.blade.php` (create file if not)
    ````html
    <link rel="stylesheet" href="{{ asset('css/tailwind-colors.css') }}">
    ````
3. Customize your field:
    ````php
    Badge::make('Type')
        ->addTypes([
            'Free' => 'bg-blue-100 text-blue-600 dark:bg-blue-500 dark:text-blue-900',
            'Pro' => 'bg-violet-100 text-violet-600 dark:bg-violet-500 dark:text-violet-900',
            'Premium' => 'bg-lime-100 text-lime-600 dark:bg-lime-500 dark:text-lime-900',
        ]),
    ````
### Example
<p style="text-align: center;" align="center">
<img alt="Laravel Nova Badge" src="https://github.com/abordage/tailwind-colors/blob/master/docs/images/laravel-nova-badge-examples.png?raw=true">
</p>


### Customisation
1. Specify the desired colors and styles in `content-generator.php` 
2. Run `php content-generator.php`
3. Run  `npx tailwindcss -i ./src/input.css -o ./dist/tailwind-colors.css --minify`


## Feedback
If you have any feedback, comments or suggestions, please feel free to open an issue within this repository.

## Credits

- [Pavel Bychko](https://github.com/abordage)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

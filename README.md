# Arthedain/Linking

### Installation
```sh
composer require arthedain/linking
```

### Publish
```sh
// publish all

php artisan vendor:publish --provider="Arthedain\Linking\LinkingServiceProvider" --tag="all"

// or

php artisan vendor:publish --provider="Arthedain\Linking\LinkingServiceProvider" --tag="migration"

php artisan vendor:publish --provider="Arthedain\Linking\LinkingServiceProvider" --tag="model"

php artisan vendor:publish --provider="Arthedain\Linking\LinkingServiceProvider" --tag="nova-resource"

php artisan vendor:publish --provider="Arthedain\Linking\LinkingServiceProvider" --tag="class"
```

# Roots

Simple and flexible package template.

# Usage

- Roots all occurances of `Roots` (case sensitive) with the name of the package namespace. E.g. the `Foo` in `Soho\Foo`.
    - Also do this for file names, e.g. `RootsServiceProvider.php`.
- Roots all occurances of `Roots` with the name of the package on composer, e.g. the `bar` in `Sohox/bar`.
- If MySQL is not needed, remove `docker-compose.yml`, remove the line that runs docker from `./check`, and remove it from the `.github/ci.yml` file.
    - If SQLite is wanted, change `DB_CONNECTION` in `phpunit.xml` to `sqlite`, and `DB_DATABASE` to `:memory:`.

---

## Installation

```sh
composer require soho/roots
```

## Usage

```php
// ...
```

## Development

Run all checks locally:

```sh
./check
```

Code style will be automatically fixed by php-cs-fixer.

Symfony Tiny Edition
====================

This tiny Symfony Edition contains only Framework and Twig bundles (plus Debug and WebProfiler in debug mode).

You may use this edition when you want to bootstrap a tiny symfony project and aim to add what you'll need only when you need it.

## Installation

```
composer create-project adriensamson/symfony-tiny-edition my-project
```

Do not forget to update name and description in `composer.json` according to your project.
You also have to copy `app/config/parameters.yml.dist` to `app/config/parameters.yml` and edit it manually.

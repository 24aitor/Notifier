<h1 align="center">Notifier</h1>

<p align="center">
    <a href="https://styleci.io/repos/97416845"><img src="https://styleci.io/repos/97416845/shield?style=flat&branch=master" alt="StyleCI"></a>
    <a href="https://github.com/24aitor/Notifier/releases"><img src="https://poser.pugx.org/aitor24/notifier/v/stable.svg" alt="Version"></a>
    <a href="https://raw.githubusercontent.com/24aitor/Notifier/master/LICENSE"><img src="https://poser.pugx.org/aitor24/notifier/license.svg" alt="License"></a>
</p>

Laravel package to generate easily js notifications from php code

## Blade example

```php
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        {!! Notifier::assets('sweetalert') !!}
    </head>
    <body>
        <!-- your content -->

        {!! Notifier::notify('Permission denied', 'error') !!}
    </body>
</html>
```

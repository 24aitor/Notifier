<p align="center"><img height="250" src="https://i.imgur.com/pKVquiT.png"></p>

<h1 align="center">Notifier</h1>

<p align="center">
    <a href="https://styleci.io/repos/97416845"><img src="https://styleci.io/repos/97416845/shield?style=flat&branch=master" alt="StyleCI"></a>
    <a href="https://github.com/24aitor/Notifier/releases"><img src="https://poser.pugx.org/aitor24/notifier/v/stable.svg" alt="Version"></a>
    <a href="https://raw.githubusercontent.com/24aitor/Notifier/master/LICENSE"><img src="https://poser.pugx.org/aitor24/notifier/license.svg" alt="License"></a>
</p>

Laravel package to generate easily js notifications from php code

## Getting started

### Register Service Provider & Alias

If you're using laravel 5.5, you don't need to register Service Provider nor Alias. Else, you should do it!

#### Register Service Provider

```
Aitor24\Notifier\NotifierServiceProvider::class,
```

#### Register Alias

```
'Notifier' => Aitor24\Notifier\Facades\Notifier::class,
```


## Simple example

```php
<html>
    <head>
        <meta charset="utf-8">
        {!! Notifier::assets('sweetalert') !!}
    </head>
    <body>
        <!-- your content -->

        {!! Notifier::notify('Permission denied', 'error')->subtitle('You have not access to this site!') !!}
    </body>
</html>
```

## Catching base session notifications

If you don't want to call notify function everytime, all function is your solution. This function catch all session base messages (success, info, error, and warning) and you only need to put the code in the layout as following example.

### Controller example

You should do redirect with ``->with()`` function to flash messages for next request on session.

```php
public function redirect()
{
    return redirect()->route('welcome')->with('success', 'All done!');
}
```

### Layout example

Then your layout should have similar structure to following code snippet

```php
<html>
    <head>
        <meta charset="utf-8">
        {!! Notifier::assets('sweetalert') !!}
    </head>
    <body>
        <!-- your content -->

        {!! Notifier::all('sweetalert') !!}
    </body>
</html>
```

Function ``all()`` can be called without parameters, then the library will be the config('notifier.defaults.library') library.

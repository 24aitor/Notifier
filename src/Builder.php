<?php

namespace Aitor24\Notifier;

use Aitor24\Notifier\Builder\Notification;

class Builder
{
    /**
     * Get the notification.
     *
     * @param string $string
     *
     * @return string
     */
    public static function assets($library = null)
    {
        $assets = '';
        if (!$library) {
            $library = config('notifier.assets');
        }

        if (is_array($library)) {
            foreach ($library as $key => $libname) {
                foreach ($libname as $css) {
                    $assets = $assets.'<link rel="stylesheet" href="'.$css.'" />';
                }
            }
        } else {
            foreach (config('notifier.assets')[$library] as $css) {
                $assets = $assets.'<link rel="stylesheet" href="'.$css.'" />';
            }
        }

        return $assets;
    }

    /**
     * Return the notification.
     *
     * @param string $string
     *
     * @return string
     */
    public static function notify($string, $type = null)
    {
        return new Notification($string, $type);
    }

    /**
     * Return the notification.
     *
     * @param string $string
     *
     * @return string
     */
    public static function all($library = null)
    {
        if (is_null($library)) {
            $library = config('notifier.defaults.library');
        }

        $types = collect(['error', 'success', 'warning', 'info']);

        $types->each(function ($type) use ($response, $library) {
            if (session()->has($type)) {
                echo(self::notify(session()->get($type), $type)->library($library));
            }
        });

        return;
    }
}

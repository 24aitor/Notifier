<?php

namespace Aitor24\Notifier;

use Illuminate\Support\Facades\Session;
use Aitor24\Notifier\Builder\Notification;

class Builder
{
    /**
     * Get the notification assets.
     *
     * @param string $library
     *
     * @return string
     */
    public static function assets($library = null)
    {
        $assets = '';
        $library = $library ? $library : config('notifier.assets');

        if (is_array($library)) {
            foreach ($library as $libname) {
                foreach ($libname as $css) {
                    $assets .= "<link rel='stylesheet' href='{$css}' />";
                }
            }
        } else {
            foreach (config('notifier.assets')[$library] as $css) {
                $assets .= "<link rel='stylesheet' href='{$css}' />";
            }
        }

        return $assets;
    }

    /**
     * Return the notification.
     *
     * @param string $string
     * @param string $type
     *
     * @return string
     */
    public static function notify($string, $type = null)
    {
        return new Notification($string, $type);
    }

    /**
     * Return all the notifications.
     *
     * @param string $library
     *
     * @return string
     */
    public static function all($library = null)
    {
        $library = $library ? $library : config('notifier.defaults.library');

        $types = ['error', 'success', 'warning', 'info'];

        $response = '';

        foreach ($types as $type) {
            if (Session::has($type)) {
                $response .= ' ' . self::notify(Session::get($type), $type)->library($library);
            }
        }

        return $response;
    }
}

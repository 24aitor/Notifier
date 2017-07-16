<?php

namespace Aitor24\Notifier;

class Builder
{
    /**
     * Get the notification.
     *
     * @param string $string
     *
     * @return string
     */
    public static function assets($library = NULL)
    {
        $assets = '';
        if (!$library) {
            $library = config('notifier.assets');
        }

        if (is_array($library)) {
            dd('v');
            foreach ($library as $key => $libname) {
                foreach ($libname as $css) {
                    $assets = $assets . '<link rel="stylesheet" href="' . $css . '" />';
                }
            }
        } else {
            foreach (config('notifier.assets')[$library] as $css) {
                $assets = $assets . '<link rel="stylesheet" href="' . $css . '" />';
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
    public static function notify($string, $type = NULL, $library = NULL)
    {
        if (!$type) {
            $type = config('notifier.defaults.type');
        }

        if (!$library) {
            $library = config('notifier.defaults.library');
        }

        return view('notifier::' . $library, ['string' => is_array($string) ? $string[0] : $string, 'subtitle' => is_array($string) ? $string[1] : '', 'type' => $type]);
    }
}

<?php

namespace Aitor24\Notifier\Builder;

use Illuminate\Support\Facades\View;

class Notification
{
    /**
     * Setup public vars.
     */
    public $string;
    public $subtitle;
    public $type;
    public $library;
    public $okText;

    /**
     * Setup default values.
     *
     * @param string $string
     */
    public function __construct($string, $type)
    {
        $this->string = $string;
        $this->subtitle = '';
        $this->type = $type ? $type : config('notifier.defaults.type');
        $this->library = config('notifier.defaults.library');
        $this->okText = config('notifier.defaults.okText');
    }

    /**
     * Setup subtitle value.
     *
     * @param bool $subtitle
     */
    public function subtitle($subtitle)
    {
        if (is_array($subtitle)) {
            $this->subtitle = $subtitle;
        } else {
            $this->subtitle = [$subtitle];
        }

        return $this;
    }

    /**
     * Setup library value.
     *
     * @param bool $library
     */
    public function library($library)
    {
        $this->library = $library;

        return $this;
    }

    /**
     * Setup library value.
     *
     * @param bool $library
     */
    public function okText($string)
    {
        $this->okText = $string;

        return $this;
    }

    /**
     * It would render the notification.
     */
    public function __toString()
    {
        return View::make('notifier::'.$this->library, [
            'string'   => $this->string,
            'subtitle' => $this->subtitle,
            'type'     => $this->type,
            'okText'   => $this->okText,
        ])->render();
    }
}

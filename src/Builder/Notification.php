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
    }

    /**
     * Setup subtitle value.
     *
     * @param bool $subtitle
     */
    public function subtitle($subtitle)
    {
        $this->subtitle = $subtitle;
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
     * This fuction is called by trans() function of Fadade Laralang
     * It would call run() function of this class and returns the translation.
     */
    public function __toString()
    {
        return View::make('notifier::'.$this->library, ['string' => $this->string, 'subtitle' => $this->subtitle, 'type' => $this->type])->render();
    }
}

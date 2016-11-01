<?php

namespace App\Http;

class Flash
{
    /**
     * Create a flash message.
     *
     * @param string|null $key 
     * @param string $title
     * @param string $text
     * @param string $level
     * @return void
     */
     public function create($title, $text, $level, $key = 'flash_message')
    {
        session()->flash($key, [
            'title' => $title,
            'text' => $text,
            'type' => $level
        ]);
    }
    /**
     * Create an information flash message.
     *
     * @param string $title
     * @param string $text
     * @return void
     */
    public function info($title, $text)
    {
        return flash()->create($title, $text, 'info');
    }

    /**
     * Create a success flash message.
     *
     * @param string $title
     * @param string $text
     * @return void
     */
    public function success($title, $text)
    {
        return flash()->create($title, $text, 'success');
    }

    /**
     * Create an error flash message.
     *
     * @param string $title
     * @param string $text
     * @return void
     */
    public function error($title, $text)
    {
        return flash()->create($title, $text, 'error');
    }

    /**
     * Create an overlay flash message.
     *
     * @param string $title
     * @param string $text
     * @return void
     */
    public function overlay($title, $text)
    {
        return flash()->create($title, $text, 'success', 'flash_message_overlay');
    }
}
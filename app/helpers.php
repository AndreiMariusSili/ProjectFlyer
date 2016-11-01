<?php
    
    /**
     * Flashes a message to the view.
     * 
     * @return App\Http\FlashFlash 
     */
    function flash()
    {
        $flash = app('App\Http\Flash');

        return $flash;
    }

    /**
     * The path to a given flyer.
     * 
     * @param  App\Flyer  $flyer 
     * @return string        
     */
    function flyer_path(App\Flyer $flyer)
    {
        return str_replace(' ', '_', $flyer->zip) . '/' . str_replace(' ', '_', $flyer->street);
    }
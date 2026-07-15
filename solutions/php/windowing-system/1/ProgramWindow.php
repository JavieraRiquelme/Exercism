<?php

class ProgramWindow
{
    public $x;
    public $y;
    public $width;
    public $height;

    function __construct() 
    {
        $this->x = 0;
        $this->y = 0; 
        $this->height = 600;
        $this->width = 800;
    }

    function resize($size)
    {
        $this->width = $size->width;
        $this->height= $size->height;
    }

    function move($Position)
    {
        $this->x = $Position->x;
        $this->y = $Position->y;
    }
}

<?php

namespace Be\Theme\Cafe;


class Property extends \Be\Theme\Property
{

    public string $label = '咖啡店';


    public string $previewImage = 'images/preview.jpg';


    public function __construct() {
        parent::__construct(__FILE__);
    }

}


<?php

namespace Be\Theme\Cafe\Section\HeaderSubTitle;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['north'];

    private function css()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();

        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('header-sub-title');
        echo $this->getCssPadding('header-sub-title');

        echo '#' . $this->id . ' .header-sub-title {';
        if ($this->config->backgroundImage === '') {
            echo 'background-image: url(' . $wwwUrl . '/images/header-sub-title/bg.png);';
        } else {
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
        }
        echo 'background-position: top center;';
        echo 'background-repeat: no-repeat;';
        echo 'background-size: cover;';
        echo '}';


        echo '</style>';
    }


    public function display()
    {

        $menuActiveItem = null;

        $northMenu = Be::getMenu('North');
        $menuActiveId = $northMenu->getActiveId();
        foreach ($northMenu->getItems() as $item) {
            if ($item->id === $menuActiveId) {
                $menuActiveItem = $item;
                break;
            }
        }

        $this->css();
        ?>
        <div class="header-sub-title">
            <div class="be-container">
                <div class="be-fs-200 be-fw-600 be-ta-center title-font">
                    <?php
                    if (isset($this->page->pageTitle) && $this->page->pageTitle !== '') {
                        echo $this->page->pageTitle;
                    } elseif (isset($this->page->title) && $this->page->title !== '') {
                        echo $this->page->title;
                    } else {
                        echo 'Page Title';
                    }
                    ?>
                </div>

                <div class="be-mt-200 be-ta-center">
                    <a class="be-btn be-btn-major" href="/">Home</a> / <?php echo $menuActiveItem === null ? '' : $menuActiveItem->label; ?>
                </div>
            </div>
        </div>
        <?php
    }

}

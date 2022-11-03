<?php

namespace Be\Theme\Cafe\Section\AppCmsSearch;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{

    public array $positions = ['west', 'east'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('app-cms-search');
        echo $this->getCssPadding('app-cms-search');
        echo $this->getCssMargin('app-cms-search');

        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            ?>
            <div class="app-cms-search">
                <form action="<?php echo beUrl('Cms.Article.search')?>" method="get">
                <div class="be-row">
                    <div class="be-col"><input type="text" name="keyword" class="be-input be-lh-175" placeholder="Search..."></div>
                    <div class="be-col-auto"><input type="submit" class="be-btn be-btn-major be-btn-lg" value="Search"></div>
                </div>
                </form>
            </div>
            <?php
        }
    }
}


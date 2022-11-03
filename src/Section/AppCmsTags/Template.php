<?php

namespace Be\Theme\Cafe\Section\AppCmsTags;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{

    public array $positions = ['center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('app-cms-tags');
        echo $this->getCssPadding('app-cms-tags');
        echo $this->getCssMargin('app-cms-tags');

        echo '#' . $this->id . ' .app-cms-tags-title {';
        echo 'display: block;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-article-image {';
        echo 'display: block;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-article-image img {';
        echo 'width: 100%;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-article-title {';
        echo 'color: var(--font-color);';
        echo 'display: block;';
        echo '}';

        echo '#' . $this->id . ' .app-cms-article-title:hover {';
        echo 'color: var(--major-color);';
        echo '}';
        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable === 0) {
            return;
        }

        $tags = Be::getService('App.Cms.Article')->getTopTags($this->config->quantity);
        if (count($tags) === 0) {
            return;
        }

        $this->css();
        ?>
        <div class="app-cms-tags">

            <div class="app-cms-tags-title"><?php echo $this->config->title; ?></div>

            <div class="be-mt-125">
            <?php
            foreach ($tags as $tag) {
                ?>
                <a class="be-mt-50 be-ml-50 be-btn be-btn-major be-btn-sm" href="<?php echo beUrl('Cms.Article.search', ['tag'=> $tag]); ?>" title="<?php echo $tag; ?>">
                    #<?php echo $tag; ?>
                </a>
                <?php
            }
            ?>
            </div>
        </div>
        <?php

    }

}


<?php

namespace Be\Theme\Cafe\Section\AppCmsLatest;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{

    public array $positions = ['center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('app-cms-latest');
        echo $this->getCssPadding('app-cms-latest');
        echo $this->getCssMargin('app-cms-latest');

        echo '#' . $this->id . ' .app-cms-latest-title {';
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

        $articles = Be::getService('App.Cms.Article')->getLatestArticles($this->config->quantity);
        if (count($articles) === 0) {
            return;
        }

        $this->css();
        ?>
        <div class="app-cms-latest">

            <div class="app-cms-latest-title"><?php echo $this->config->title; ?></div>

            <div class="be-mt-125">
            <?php
            $i = 0;
            foreach ($articles as $article) {
                ?>
                <div class="<?php echo $i > 0 ? ' be-mt-200': ''?>">
                    <a class="app-cms-article-image" href="<?php echo beUrl('Cms.Article.detail', ['id'=> $article->id]); ?>" title="<?php echo $article->title; ?>">
                        <img src="<?php
                        if ($article->image === '') {
                            echo \Be\Be::getProperty('App.Cms')->getWwwUrl() . '/article/images/no-image-m.jpg';
                        } else {
                            echo $article->image;
                        }
                        ?>" alt="<?php echo $article->title; ?>">
                    </a>

                    <a class="app-cms-article-title be-mt-50 be-fs-90 be-t-ellipsis" href="<?php echo beUrl('Cms.Article.detail', ['id'=> $article->id]); ?>" title="<?php echo $article->title; ?>">
                        <?php echo $article->title; ?>
                    </a>
                </div>
                <?php

                $i++;
            }
            ?>
            </div>
        </div>
        <?php

    }

}


<?php
namespace Be\Theme\Cafe\Section\Story;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle', 'center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('story');
        echo $this->getCssPadding('story');

        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .story {';
            echo 'background-color: #FFFFFF;';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: 0px 40px;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: 20% auto;';
            echo '}';
        }

        if ($this->config->imageBackgroundImage !== '') {
            echo '#' . $this->id . ' .story-side-left {';
            echo 'background-image: url(' . $this->config->imageBackgroundImage . ');';
            echo 'background-position: center center;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: contain;';
            echo '}';
        }

        if ($this->config->overlayImage !== '') {
            echo '#' . $this->id . ' .story {';
            echo 'position: relative;';
            echo '}';

            echo '#' . $this->id . ' .story-overlay {';
            echo 'background-image: url(' . $this->config->overlayImage . ');';
            echo 'background-position: center right;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: 250px auto;';
            echo 'opacity: .5;';
            echo 'position: absolute;';
            echo 'width: 100%;';
            echo 'height: 100%;';
            echo 'left: 0;';
            echo 'top: 0;';
            echo '}';

            echo '#' . $this->id . ' .be-container {';
            echo 'z-index: 9;';
            echo 'position: relative;';
            echo '}';
        }

        echo '#' . $this->id . ' .story-side-left {';
        echo '}';

        echo '#' . $this->id . ' .story-side-left img {';
        echo 'max-width: 100%;';
        echo '}';

        echo '#' . $this->id . ' .story-side-right {';
        echo 'display: flex;';
        echo 'align-items: center;';
        echo '}';

        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            ?>
            <div class="story">
                <div class="story-overlay"></div>
                <div class="be-container">
                    <div class="be-row">
                        <div class="be-col-24 be-lg-col story-side-left">
                            <img src="<?php echo $this->config->image; ?>" alt="<?php echo $this->config->title; ?>">
                        </div>
                        <div class="be-col-24 be-lg-col-auto"><div class="be-pl-400 be-mt-200"></div></div>
                        <div class="be-col-24 be-lg-col story-side-right">
                            <div>
                                <div class="title-separator"><div class="title-separator-diamond"></div></div>
                                <div class="be-mt-100 be-fs-300 be-fw-600 title-font"><?php echo $this->config->title; ?></div>
                                <div class="be-mt-200 be-fs-110 be-c-444 be-lh-200"><?php echo $this->config->description; ?></div>
                                <div class="be-mt-200">
                                    <a href="<?php echo $this->config->linkUrl; ?>"><?php echo $this->config->linkText; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php
        }
    }
}


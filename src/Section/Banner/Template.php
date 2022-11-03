<?php
namespace Be\Theme\Cafe\Section\Banner;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle', 'center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('banner');
        echo $this->getCssPadding('banner');
        echo $this->getCssMargin('banner');

        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .banner {';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: 0px 68%;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: cover;';
            echo '}';
        }

        echo '#' . $this->id . ' .banner-side-right {';
        echo 'display: flex;';
        echo 'align-items: center;';
        echo '}';

        echo '#' . $this->id . ' .banner-side-right .be-btn {';
        echo 'padding: .75rem 1.5rem;';
        echo '}';

        // ============================================================================================================= 手机端
        echo '@media (max-width: 992px) {';

        echo '#' . $this->id . ' .banner-side-left {';
        echo 'text-align: center;';
        echo '}';

        echo '#' . $this->id . ' .banner-side-right {';
        echo 'margin-top: 2rem;';
        echo '}';

        echo '}';
        // ============================================================================================================= 手机端


        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            ?>
            <div class="be-container">
                <div class="banner">
                    <div class="be-row">
                        <div class="be-col-24 be-lg-col-18 banner-side-left">
                            <div class="be-mt-100 be-fs-250 be-fw-600 title-font"><?php echo $this->config->title; ?></div>
                            <div class="be-mt-200 be-fs-110 be-c-444 be-lh-200"><?php echo $this->config->description; ?></div>
                        </div>
                        <div class="be-col-24 be-lg-col-6 banner-side-right">
                            <div class="be-w-100 be-ta-center">
                                <a class="be-btn be-btn-major" href="<?php echo $this->config->buttonUrl; ?>"><?php echo $this->config->buttonText; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }

}

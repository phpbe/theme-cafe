<?php

namespace Be\Theme\Cafe\Section\HeaderSlider;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['north'];

    private function css()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();

        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('header-slider');
        echo $this->getCssPadding('header-slider');

        echo '#' . $this->id . ' .header-slider {';
        if ($this->config->backgroundImage !== '') {
            echo 'background-position: center center;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: cover;';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
        }
        echo '}';

        echo '#' . $this->id . ' .owl-nav {';
        echo 'padding: 2rem 0;';
        echo '}';

        echo '#' . $this->id . ' .owl-nav .owl-prev,';
        echo '#' . $this->id . ' .owl-nav .owl-next {';
        echo 'width: 50px;';
        echo 'height: 50px;';
        echo 'font-size: 2rem;';
        echo 'border: 1px solid var(--font-color);';
        echo 'border-radius: 50%;';
        echo '}';

        echo '#' . $this->id . ' .owl-nav .owl-prev:hover,';
        echo '#' . $this->id . ' .owl-nav .owl-next:hover {';
        echo 'background-color: var(--font-color);';
        echo '}';

        echo '#' . $this->id . ' .header-slider-side-left {';
        echo 'display: flex;';
        echo 'align-items: center;';
        echo '}';

        echo '#' . $this->id . ' .header-slider-side-left .be-btn {';
        echo 'padding: .75rem 1.5rem;';
        echo '}';

        echo '#' . $this->id . ' .header-slider-stage {';
        echo 'padding-top: 3rem;';
        echo 'max-width: 576px;';
        echo 'position: relative;';
        if ($this->config->trayBackgroundImage !== '') {
            echo 'background-position: 50% 60px;';
            echo 'background-repeat: no-repeat;';
            echo 'background-image: url(' . $this->config->trayBackgroundImage . ');';
            echo 'background-size: contain;';
        }
        echo '}';

        if ($this->config->rotateText !== '') {

            echo '@keyframes rotateText {';
            echo '0% {transform: rotate(0deg);}';
            echo '100% {transform: rotate(360deg);}';
            echo '}';

            echo '#' . $this->id . ' .header-slider-stage .rotate-text {';
            echo 'position: absolute;';
            echo 'top: 70px;';
            echo 'left: 70px;';
            echo 'z-index: 9;';
            echo 'animation: rotateText 10s linear infinite;';
            echo '}';

            echo '#' . $this->id . ' .header-slider-stage .rotate-text svg {';
            echo 'width: 100px;';
            echo 'width: 100px;';
            echo 'overflow: visible;';
            echo '}';

            echo '#' . $this->id . ' .header-slider-stage .rotate-text svg path {';
            echo 'fill: transparent;';
            echo '}';

            echo '#' . $this->id . ' .header-slider-stage .rotate-text svg text {';
            echo 'fill: var(--major-color);';
            echo 'word-spacing: 4px;';
            echo 'font-size: 18px;';
            echo 'font-weight: 600;';
            echo '}';

        }

        // ============================================================================================================= 手机端
        echo '@media (max-width: 992px) {';

        echo '#' . $this->id . ' .header-slider {';
        echo 'background-position: center left;';
        echo '}';

        echo '#' . $this->id . ' .header-slider-side-left {';
        echo 'text-align: center;';
        echo 'order: 2;';
        echo 'padding-bottom: 4rem;';
        echo '}';

        echo '#' . $this->id . ' .header-slider-side-right {';
        echo 'text-align: center;';
        echo 'order: 1;';
        echo '}';


        echo '#' . $this->id . ' .header-slider-stage {';
        echo 'margin: 0 auto;';
        echo '}';


        echo '}';
        // ============================================================================================================= 手机端


        // ============================================================================================================= 电脑端
        echo '@media (min-width: 992px) {';

        echo '#' . $this->id . ' .header-slider-side-left {';
        echo 'text-align: left;';
        echo 'order: 1;';
        echo '}';


        echo '#' . $this->id . ' .header-slider-side-right {';
        echo 'text-align: center;';
        echo 'order: 2;';
        echo '}';

        echo '#' . $this->id . ' .header-slider-stage {';
        echo 'margin: 0 0 0 auto;';
        echo '}';

        echo '}';
        // ============================================================================================================= 电脑端
        echo '</style>';
    }


    public function display()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();
        ?>
        <link rel="stylesheet" href="<?php echo $wwwUrl; ?>/lib/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo $wwwUrl; ?>/lib/owl.carousel/assets/owl.theme.default.min.css">
        <?php
        $this->css();
        ?>

        <div class="header-slider">
            <div class="be-container">
                <div class="be-row">
                    <div class="be-col-24 be-lg-col-12 header-slider-side-left">
                        <div>
                            <div class="title-separator"><div class="title-separator-diamond"></div></div>
                            <div class="be-mt-100 be-fs-400 be-fw-600 title-font">
                                <?php
                                if (isset($this->page->pageConfig->pageTitle) && $this->page->pageConfig->pageTitle !== '') {
                                    echo $this->page->pageConfig->pageTitle;
                                } elseif (isset($this->page->pageConfig->title) && $this->page->pageConfig->title !== '') {
                                    echo $this->page->pageConfig->title;
                                } else {
                                    echo 'Page Title';
                                }
                                ?>
                            </div><div class="be-mt-200 be-fs-110">
                                <?php
                                if (isset($this->page->pageConfig->metaDescription) && $this->page->pageConfig->metaDescription !== '') {
                                    echo $this->page->pageConfig->metaDescription;
                                } else {
                                    echo 'Page description text';
                                }
                                ?>
                            </div>
                            <div class="be-mt-200">
                                <input type="button" class="be-btn be-btn-major" value="ORDER NOW">
                            </div>
                        </div>
                    </div>
                    <div class="be-col-24 be-lg-col-12 header-slider-side-right">
                        <div class="header-slider-stage">

                            <?php

                            if ($this->config->rotateText !== '') {
                                ?>
                                <div class="rotate-text">
                                    <svg viewBox="0 0 100 100">
                                        <path d="M 50 50 m -50 0 a 50 50 0 1 1 100 0 a 50 50 0 1 1 -100 0 z" id="rotate-text-path"></path>
                                        <text>
                                            <textPath href="#rotate-text-path">
                                                <?php echo $this->config->rotateText; ?>
                                            </textPath>
                                        </text>
                                    </svg>
                                </div>
                                <?php
                            }
                            ?>

                            <div class="owl-carousel owl-theme">
                                <?php
                                foreach ($this->config->items as $item) {
                                    $itemConfig = $item['config'];
                                    if ($itemConfig->enable) {
                                        echo '<div class="item">';
                                        switch ($item['name']) {
                                            case 'Image':
                                                echo '<div class="header-slider-image">';
                                                echo '<img src="' . $itemConfig->image . '" />';
                                                echo '</div>';
                                                echo '<div class="be-ta-center be-mt-200 be-fs-150 be-fw-bold title-font">' . $itemConfig->title . '</div>';
                                                break;
                                        }
                                        echo '</div>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo $wwwUrl; ?>/lib/owl.carousel/owl.carousel.min.js"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                items: 1,
                margin: 80,
                stagePadding: 80,
                navSpeed: 1000,
                loop:true,
                nav:true,
                dots: false
            })
        </script>
        <?php
    }

}

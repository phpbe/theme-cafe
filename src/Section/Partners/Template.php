<?php
namespace Be\Theme\Cafe\Section\Partners;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle', 'center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssPadding('partners');

        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .partners {';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: 0px 10%;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: 148px auto;';
            echo '}';
        }

        if ($this->config->overlayImage !== '') {
            echo '#' . $this->id . ' .partners {';
            echo 'position: relative;';
            echo '}';

            echo '#' . $this->id . ' .partners-overlay {';
            echo 'background-image: url(' . $this->config->overlayImage . ');';
            echo 'background-position: center right;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: 302px auto;';
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

        echo '#' . $this->id . ' .partners-head {';
        echo 'max-width: 560px;';
        echo 'margin: 0 auto;';
        echo 'text-align:center;';
        echo '}';

        echo '#' . $this->id . ' .swiper {';
        echo 'width: 100%;';
        echo '}';

        echo '#' . $this->id . ' .partners-item img {';
        echo 'max-width: 100%;';
        echo '}';


        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();
            ?>
            <link rel="stylesheet" href="<?php echo $wwwUrl; ?>/lib/swiper/8.3.2/swiper-bundle.min.css">
            <?php
            $this->css();
            ?>
            <div class="partners">
                <div class="partners-overlay"></div>

                <div class="be-container">

                    <div class="partners-head">
                        <div class="title-separator"><div class="title-separator-diamond"></div></div>
                        <div class="be-mt-100 be-fs-300 be-fw-600 title-font"><?php echo $this->config->title; ?></div>
                        <div class="be-mt-200 be-fs-110 be-c-444 be-lh-200"><?php echo $this->config->description; ?></div>
                    </div>

                    <div class="be-mt-300">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                            <?php
                            if (isset($this->config->items) && is_array($this->config->items) && count($this->config->items) > 0) {
                                foreach ($this->config->items as $item) {
                                    $itemConfig = $item['config'];
                                    if ($itemConfig->enable) {
                                        echo '<div class="partners-item swiper-slide">';
                                        switch ($item['name']) {
                                            case 'Partner':
                                                echo '<img src="' . $itemConfig->image . '" alt="">';
                                                break;
                                        }
                                        echo '</div>';
                                    }
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="<?php echo $wwwUrl; ?>/lib/swiper/8.3.2/swiper-bundle.min.js"></script>
            <script>
                const swiper = new Swiper('#<?php echo  $this->id; ?> .swiper', {
                    loop: true,
                    slidesPerView: 1,
                    spaceBetween: 40,
                    breakpoints: {
                        320: {
                            slidesPerView: 2,
                            spaceBetween: 60
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 80
                        },
                        1024: {
                            slidesPerView: 5,
                            spaceBetween: 100
                        }
                    },
                    autoplay: {
                        delay: 5000
                    }
                });
            </script>
            <?php
        }
    }
}


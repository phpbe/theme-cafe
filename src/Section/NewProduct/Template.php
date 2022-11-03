<?php
namespace Be\Theme\Cafe\Section\NewProduct;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle', 'center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('new-product');
        echo $this->getCssPadding('new-product');

        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .new-product {';
            echo 'background-color: #FFFFFF;';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: 0px 40px;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: 20% auto;';
            echo '}';
        }

        if ($this->config->imageBackgroundImage !== '') {
            echo '#' . $this->id . ' .new-product-side-right {';
            echo 'background-image: url(' . $this->config->imageBackgroundImage . ');';
            echo 'background-position: center center;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: contain;';
            echo '}';
        }

        if ($this->config->overlayImage !== '') {
            echo '#' . $this->id . ' .new-product {';
            echo 'position: relative;';
            echo '}';

            echo '#' . $this->id . ' .new-product-overlay {';
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


        echo '#' . $this->id . ' .new-product-side-left {';
        echo 'display: flex;';
        echo 'align-items: center;';
        echo '}';


        echo '#' . $this->id . ' .new-product-side-right {';
        echo '}';

        echo '#' . $this->id . ' .new-product-side-right img {';
        echo 'max-width: 100%;';
        echo '}';

        echo '#' . $this->id . ' .new-product-stage {';
        echo 'position: relative;';
        echo '}';

        if ($this->config->rotateText !== '') {
            echo '@keyframes rotateText {';
            echo '0% {transform: rotate(0deg);}';
            echo '100% {transform: rotate(360deg);}';
            echo '}';

            echo '#' . $this->id . ' .new-product-rotate-text {';
            echo 'position: absolute;';
            echo 'top: 30px;';
            echo 'left: 120px;';
            echo 'z-index: 9;';
            echo 'animation: rotateText 10s linear infinite;';
            echo '}';

            echo '#' . $this->id . ' .new-product-rotate-text svg {';
            echo 'width: 100px;';
            echo 'width: 100px;';
            echo 'overflow: visible;';
            echo '}';

            echo '#' . $this->id . ' .new-product-rotate-text svg path {';
            echo 'fill: transparent;';
            echo '}';

            echo '#' . $this->id . ' .new-product-rotate-text svg text {';
            echo 'fill: var(--font-color);';
            echo 'word-spacing: 4px;';
            echo 'font-size: 18px;';
            echo 'font-weight: 600;';
            echo '}';
        }

        echo '@keyframes waveImage {';
        echo '0% {transform: translateY(0);}';
        echo '50% {transform: translateY(10px);}';
        echo '100% {transform: translateY(0);}';
        echo '}';

        echo '#' . $this->id . ' .new-product-image {';
        echo 'padding: 4rem;';
        echo 'animation: waveImage 2s linear infinite;';
        echo '}';

        echo '#' . $this->id . ' .new-product-image img {';
        echo 'max-width: 100%;';
        echo '}';


        echo '#' . $this->id . ' .new-product-side-separator {';
        echo 'order: 2;';
        echo '}';

        // ============================================================================================================= 手机端
        echo '@media (max-width: 992px) {';

        echo '#' . $this->id . ' .new-product-side-left {';
        echo 'text-align: center;';
        echo 'order: 3;';
        echo '}';

        echo '#' . $this->id . ' .new-product-side-right {';
        echo 'text-align: center;';
        echo 'order: 1;';
        echo '}';

        echo '}';
        // ============================================================================================================= 手机端


        // ============================================================================================================= 电脑端
        echo '@media (min-width: 992px) {';

        echo '#' . $this->id . ' .new-product-side-left {';
        echo 'order: 1;';
        echo '}';

        echo '#' . $this->id . ' .new-product-side-right {';
        echo 'order: 3;';
        echo '}';

        echo '}';
        // ============================================================================================================= 电脑端


        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            ?>
            <div class="new-product">
                <div class="new-product-overlay"></div>
                <div class="be-container">
                    <div class="be-row">
                        <div class="be-col-24 be-lg-col new-product-side-left">
                            <div>
                                <div class="title-separator"><div class="title-separator-diamond"></div></div>
                                <div class="be-mt-100 be-fs-300 be-fw-600 title-font"><?php echo $this->config->title; ?></div>
                                <div class="be-mt-200 be-fs-110 be-c-444 be-lh-200"><?php echo $this->config->description; ?></div>
                                <div class="be-mt-200">
                                    <a href="<?php echo $this->config->linkUrl; ?>"><?php echo $this->config->linkText; ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="be-col-24 be-lg-col-auto new-product-side-separator"><div class="be-pl-400 be-mt-200"></div></div>
                        <div class="be-col-24 be-lg-col new-product-side-right">
                            <div class="new-product-stage">
                                <?php
                                if ($this->config->rotateText !== '') {
                                    $id = uniqid() . '-' . rand(10000, 9999);
                                    ?>
                                    <div class="new-product-rotate-text">
                                        <svg viewBox="0 0 100 100">
                                            <path d="M 50 50 m -50 0 a 50 50 0 1 1 100 0 a 50 50 0 1 1 -100 0 z" id="new-product-rotate-text-path-<?php echo $id; ?>"></path>
                                            <text>
                                                <textPath href="#new-product-rotate-text-path-<?php echo $id; ?>">
                                                    <?php echo $this->config->rotateText; ?>
                                                </textPath>
                                            </text>
                                        </svg>
                                    </div>
                                    <?php
                                }
                                ?>

                                <div class="new-product-image">
                                <img src="<?php echo $this->config->image; ?>" alt="<?php echo $this->config->title; ?>">
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


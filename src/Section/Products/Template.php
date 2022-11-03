<?php
namespace Be\Theme\Cafe\Section\Products;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle', 'center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('products');
        echo $this->getCssPadding('products');
        echo $this->getCssSpacing('products-items', 'products-item', '100%', '100%', '50%');

        echo '#' . $this->id . ' .products .title-separator {';
        echo 'border-color: #ECC493;';
        echo '}';

        echo '#' . $this->id . ' .products .title-separator-diamond {';
        echo 'background-color: #ECC493;';
        echo '}';

        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .products {';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: center right;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: 350px auto;';
            echo '}';
        }

        if ($this->config->overlayImage !== '') {
            echo '#' . $this->id . ' .products {';
            echo 'position: relative;';
            echo '}';

            echo '#' . $this->id . ' .products-overlay {';
            echo 'background-image: url(' . $this->config->overlayImage . ');';
            echo 'background-position: 0% 90%;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: 10% auto;';
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

        // ============================================================================================================= 手机端
        echo '@media (max-width: 992px) {';

        echo '#' . $this->id . ' .products-head {';
        echo 'text-align: center;';
        echo '}';

        echo '}';
        // ============================================================================================================= 手机端

        echo '#' . $this->id . ' .products-items-container {';
        echo 'overflow: hidden;';
        echo '}';

        echo '#' . $this->id . ' .products-item-title-line {';
        echo 'border-top: #ECC493 1px dotted;';
        echo 'margin: 1rem 1rem 0 1rem;';
        echo '}';

        echo '#' . $this->id . ' .products-item-price {';
        echo 'color: #ECC493;';
        echo 'margin-top: .4rem;';
        echo '}';

        echo '#' . $this->id . ' .products-item-image {';
        echo 'width: 90px;';
        echo 'height: 90px;';
        echo 'margin-right: 1.5rem;';
        echo '}';

        echo '#' . $this->id . ' .products-item-image img {';
        echo 'max-width: 100%;';
        echo '}';

        echo '#' . $this->id . ' .products-item-description {';
        echo 'color: #C6C6C6';
        echo '}';


        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            ?>
            <div class="products">
                <div class="products-overlay"></div>

                <div class="be-container">

                    <div class="products-head">
                        <div class="title-separator"><div class="title-separator-diamond"></div></div>
                        <div class="be-mt-100 be-fs-300 be-fw-600 be-c-fff title-font"><?php echo $this->config->title; ?></div>
                    </div>

                    <div class="be-mt-300">
                        <div class="products-items-container">
                            <div class="products-items">
                            <?php
                            if (isset($this->config->items) && is_array($this->config->items) && count($this->config->items) > 0) {
                                foreach ($this->config->items as $item) {
                                    $itemConfig = $item['config'];
                                    if ($itemConfig->enable) {
                                        echo '<div class="products-item">';
                                        switch ($item['name']) {
                                            case 'Product':
                                                echo '<div class="be-row">';

                                                echo '<div class="be-col-auto">';
                                                echo '<div class="products-item-image"><img src="' . $itemConfig->image . '" alt="' . $itemConfig->title . '"></div>';
                                                echo '</div>';

                                                echo '<div class="be-col">';

                                                echo '<div class="be-row">';
                                                echo '<div class="be-col-auto"><div class="be-fs-125 be-fw-bold be-c-fff title-font">' . $itemConfig->title . '</div></div>';
                                                echo '<div class="be-col"><div class="be-row products-item-title-line"></div></div>';
                                                echo '<div class="be-col-auto products-item-price">' . $itemConfig->price . '</div>';
                                                echo '</div>';

                                                echo '<div class="be-mt-50 be-lh-150 products-item-description">' . $itemConfig->description . '</div>';

                                                echo '</div>';
                                                echo '</div>';
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
            <?php
        }
    }
}


<?php
namespace Be\Theme\Cafe\Section\ProductCategories;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle', 'center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('product-categories');
        echo $this->getCssPadding('product-categories');
        echo $this->getCssSpacing('product-categories-items', 'product-categories-item', '100%', '50%', '25%');

        echo '#' . $this->id . ' .product-categories {';
        echo 'text-align:center;';
        echo '}';

        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .product-categories {';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: center center;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: cover;';
            echo '}';
        }

        echo '#' . $this->id . ' .product-categories-head {';
        echo 'max-width: 560px;';
        echo 'margin: 0 auto;';
        echo '}';


        echo '#' . $this->id . ' .product-categories-items-container {';
        echo 'overflow: hidden;';
        echo '}';

        echo '#' . $this->id . ' .product-categories-item-container {';
        echo 'background-color: #fff;';
        echo 'padding: 2rem;';
        echo 'height: 100%;';
        echo '}';

        echo '#' . $this->id . ' .product-categories-item-image {';
        echo 'width: 120px;';
        echo 'height: 120px;';
        echo 'overflow: hidden;';
        echo 'margin: 0 auto;';
        echo '}';

        echo '#' . $this->id . ' .product-categories-item-image img {';
        echo 'width: 120px;';
        echo 'height: 120px;';
        echo 'object-fit:contain;';
        echo '}';

        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            ?>
            <div class="product-categories">
                <div class="be-container">

                    <div class="product-categories-head">
                        <div class="title-separator"><div class="title-separator-diamond"></div></div>
                        <div class="be-mt-100 be-fs-300 be-fw-600 title-font"><?php echo $this->config->title; ?></div>
                        <div class="be-mt-200 be-fs-110 be-c-444 be-lh-200"><?php echo $this->config->description; ?></div>
                    </div>

                    <div class="be-mt-300">
                        <div class="product-categories-items-container">
                            <div class="product-categories-items">
                            <?php
                            if (isset($this->config->items) && is_array($this->config->items) && count($this->config->items) > 0) {
                                foreach ($this->config->items as $item) {
                                    $itemConfig = $item['config'];
                                    if ($itemConfig->enable) {
                                        echo '<div class="product-categories-item">';
                                        echo '<div class="product-categories-item-container">';
                                        switch ($item['name']) {
                                            case 'Category':
                                                echo '<div class="product-categories-item-image"><img src="' . $itemConfig->image . '" alt="' . $itemConfig->title . '"></div>';
                                                echo '<div class="be-mt-100 be-fs-125 be-fw-bold title-font">' . $itemConfig->title . '</div>';
                                                echo '<div class="be-mt-100 be-lh-150">' . $itemConfig->description . '</div>';
                                                echo '<div class="be-mt-200"><a href="' . $itemConfig->linkUrl . '">' . $itemConfig->linkText . '</a></div>';
                                                break;
                                        }
                                        echo '</div>';
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


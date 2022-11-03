<?php

namespace Be\Theme\Cafe\Section\Images;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle', 'center'];

    public function display()
    {
        if ($this->config->enable) {
            $count = 0;
            foreach ($this->config->items as $item) {
                if ($item['config']->enable) {
                    $count++;
                }
            }

            if ($count === 0) {
                return;
            }

            echo '<style type="text/css">';

            echo $this->getCssBackgroundColor('images');
            echo $this->getCssPadding('images');

            $itemWidthMobile = '100%';
            $itemWidthTablet = $count > 1 ? '50%' : '50%';
            if ($count > 2) {
                $itemWidthDesktop = (100 / 3) . '%';
            } elseif ($count === 2) {
                $itemWidthDesktop = '50%';
            } else {
                $itemWidthDesktop = '100%';
            }
            echo $this->getCssSpacing('images-items', 'images-item', $itemWidthMobile, $itemWidthTablet, $itemWidthDesktop);

            // 手机端
            if (isset($this->config->spacingMobile) && $this->config->spacingMobile !== '') {
                echo '@media (max-width: 768px) {';
                echo '#' . $this->id . ' .images-items-container {';
                echo 'margin: 0 ' . $this->config->spacingMobile . ';';
                echo '}';
                echo '}';
            }

            // 平析端
            if (isset($this->config->spacingTablet) && $this->config->spacingTablet !== '') {
                echo '@media (min-width: 768px) {';
                echo '#' . $this->id . ' .images-items-container {';
                echo 'margin: 0 ' . $this->config->spacingTablet . ';';
                echo '}';
                echo '}';
            }

            // 电脑端
            if (isset($this->config->spacingDesktop) && $this->config->spacingDesktop !== '') {
                echo '@media (min-width: 992px) {';
                echo '#' . $this->id . ' .images-items-container {';
                echo 'margin: 0 ' . $this->config->spacingDesktop . ';';
                echo '}';
                echo '}';
            }

            echo '#' . $this->id . ' .images-item-img {';
            echo 'width: 100%;';
            echo 'aspect-ratio: 1;';
            echo 'overflow: hidden;';
            echo '}';

            echo '#' . $this->id . ' .images-item-img img {';
            echo 'width: 100%;';
            echo 'transition: all 0.7s ease;';
            echo '}';

            if ($this->config->hoverEffect !== 'none') {
                switch ($this->config->hoverEffect) {
                    case 'scale':
                        echo '#' . $this->id . ' .images-item-img:hover img {';
                        echo 'transform: scale(1.1);';
                        echo '}';
                        break;
                    case 'rotateScale':
                        echo '#' . $this->id . ' .images-item-img:hover img {';
                        echo 'transform: rotate(3deg) scale(1.1);';
                        echo '}';
                        break;
                }
            }

            echo '</style>';

            echo '<div class="images">';
            echo '<div class="images-items-container">';
            if (isset($this->config->items) && is_array($this->config->items) && count($this->config->items) > 0) {
                echo '<div class="images-items">';
                foreach ($this->config->items as $item) {
                    $itemConfig = $item['config'];
                    if ($itemConfig->enable) {
                        echo '<div class="images-item">';
                        switch ($item['name']) {
                            case 'Image':
                                echo '<div class="images-item-img">';
                                if ($itemConfig->link) {
                                    echo '<a href="' . $itemConfig->link . '">';
                                }
                                echo '<img src="' . $itemConfig->image . '" />';

                                if ($itemConfig->link) {
                                    echo '</a>';
                                }
                                echo '</div>';
                                break;
                        }
                        echo '</div>';
                    }
                }
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
        }
    }
}


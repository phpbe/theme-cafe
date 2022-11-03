<?php

namespace Be\Theme\Cafe\Section\Footer;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['south'];

    public function css()
    {
        echo '<style type="text/css">';

        echo $this->getCssBackgroundColor('footer');
        echo $this->getCssPadding('footer');

        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .footer {';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: bottom center;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: cover;';
            echo '}';
        }

        echo '#' . $this->id . ' .footer a {';
        echo 'color: var(--font-color);';
        echo '}';

        echo '#' . $this->id . ' .footer a:hover{';
        echo 'color: var(--major-color);';
        echo '}';

        echo '</style>';
    }


    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            echo '<div class="footer">';
            echo '<div class="be-container">';

            echo '<div class="be-row">';
            if (isset($this->config->items) && is_array($this->config->items) && count($this->config->items) > 0) {
                foreach ($this->config->items as $item) {
                    $itemConfig = $item['config'];
                    if (!$itemConfig->enable) {
                        continue;
                    }

                    echo '<div class="be-col-24 be-lg-col-' . ($itemConfig->cols * 8) . '">';
                    echo '<div class="be-p-100">';
                    switch ($item['name']) {
                        case 'RichText':
                            if ($itemConfig->title !== '') {
                                echo '<div class="be-fs-200 be-fw-bold be-mb-100 title-font">' . $itemConfig->title . '</div>';
                            }

                            echo '<div class="">' . $itemConfig->description . '</div>';
                            break;
                        case 'Subscribe':
                            echo '<div class="">' . $itemConfig->title . '</div>';

                            echo '<div class="be-row be-mt-100">';
                            echo '<div class="be-col"><input type="text" class="be-input be-lh-175" placeholder="Your e-mail address"></div>';
                            echo '<div class="be-col"><input type="button" class="be-btn be-btn-major be-btn-lg" value="Subscribe"></div>';
                            echo '</div>';

                            echo '<div class="be-mt-100">' . $itemConfig->description . '</div>';
                            break;
                    }
                    echo '</div>';
                    echo '</div>';
                }
            }
            echo '</div>';

            echo '<div class="be-mt-200 be-ta-leftr be-bt-eee be-pt-200 be-c-999 be-fs-90">' . $this->config->copyright . '</div>';

            echo '</div>';
            echo '</div>';
        }
    }
}

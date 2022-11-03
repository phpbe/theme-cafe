<?php
namespace Be\Theme\Cafe\Section\Feedback;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle', 'center'];

    private function css()
    {
        $count = 0;
        foreach ($this->config->items as $item) {
            if ($item['config']->enable) {
                $count++;
            }
        }

        $configTheme = \Be\Be::getConfig('Theme.Cafe.Theme');

        echo '<style type="text/css">';
        echo $this->getCssPadding('feedback');

        $itemWidthMobile = '100%';
        $itemWidthTablet = $count > 1 ? '50%' : '50%';
        if ($count > 2) {
            $itemWidthDesktop = (100 / 3) . '%';
        } elseif ($count === 2) {
            $itemWidthDesktop = '50%';
        } else {
            $itemWidthDesktop = '100%';
        }
        echo $this->getCssSpacing('feedback-items', 'feedback-item', $itemWidthMobile, $itemWidthTablet, $itemWidthDesktop);


        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .feedback {';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: 0px 10%;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: 200px auto;';
            echo '}';
        }

        if ($this->config->overlayImage !== '') {
            echo '#' . $this->id . ' .feedback {';
            echo 'position: relative;';
            echo '}';

            echo '#' . $this->id . ' .feedback-overlay {';
            echo 'background-image: url(' . $this->config->overlayImage . ');';
            echo 'background-position: center right;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: 400px auto;';
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


        echo '#' . $this->id . ' .feedback-head {';
        echo 'max-width: 560px;';
        echo 'text-align:center;';
        echo 'margin: 0 auto;';
        echo '}';

        echo '#' . $this->id . ' .feedback-item {';
        echo 'margin-top: 2rem;';
        echo '}';

        echo '#' . $this->id . ' .feedback-item-padding {';
        echo 'padding: .5rem;';
        echo '}';

        echo '#' . $this->id . ' .feedback-item-container {';
        echo 'text-align:center;';
        echo 'box-shadow:0px 4px 30px 0px rgb(0 0 0 / 5%);';
        echo 'padding: 3rem 1.5rem;';
        echo 'position: relative;';
        echo '}';


        echo '#' . $this->id . ' .feedback-item-quote-start,';
        echo '#' . $this->id . ' .feedback-item-quote-end {';
        echo 'display: inline-block;';
        echo 'width: 2rem;';
        echo 'height: 2rem;';
        echo 'background-size: 2rem 2rem;';
        echo 'background-repeat: no-repeat;';
        echo 'background-position: center center;';
        echo 'position: absolute;';
        echo 'z-index: 1;';
        echo '}';

        echo '#' . $this->id . ' .feedback-item-quote-start {';
        echo 'top: 2rem;';
        echo 'left: 2rem;';
        echo 'background-image: url("data:image/svg+xml,%3csvg viewBox=\'0 0 1024 1024\' xmlns=\'http://www.w3.org/2000/svg\'%3e%3cpath fill=\'' . str_replace('#', '%23', $configTheme->majorColor) . '\' d=\'M235.710908 565.365418c3.442402-99.843986 20.061918-175.8521 49.92097-228.089835 29.827329-52.206012 76.305897-91.50097 139.435703-117.916597L349.324502 98.858542c-104.442724 47.073108-180.749644 116.493178-228.948389 208.29193C83.631234 376.007723 65.290517 487.336274 65.290517 641.107473l0 284.032962 332.234777 0L397.525294 565.365418 235.710908 565.365418zM769.351787 565.365418c3.442402-99.843986 20.061918-175.8521 49.92097-228.089835 29.827329-52.206012 76.305897-91.50097 139.435703-117.916597L882.965381 98.858542c-104.442724 47.073108-180.749644 116.493178-228.948389 208.29193-36.744879 68.857251-55.085596 180.185802-55.085596 333.957001l0 284.032962 332.234777 0L931.166173 565.365418 769.351787 565.365418z\'%3e%3c/path%3e%3c/svg%3e");';
        echo '}';

        echo '#' . $this->id . ' .feedback-item-quote-end {';
        echo 'right: 2rem;';
        echo 'bottom: 2rem;';
        echo 'background-image: url("data:image/svg+xml,%3csvg viewBox=\'0 0 1024 1024\' xmlns=\'http://www.w3.org/2000/svg\'%3e%3cpath fill=\'' . str_replace('#', '%23', $configTheme->majorColor) . '\' d=\'M788.288069 458.634582c-3.442402 99.842962-20.061918 175.8521-49.92097 228.090858-29.827329 52.204989-76.305897 91.499947-139.435703 117.915573l75.743078 120.500445c104.442724-47.073108 180.749644-116.493178 228.948389-208.292953 36.744879-68.857251 55.085596-180.185802 55.085596-333.957001L958.70846 98.858542 626.473683 98.858542l0 359.77604L788.288069 458.634582zM254.647189 458.634582c-3.442402 99.842962-20.061918 175.8521-49.92097 228.089835-29.827329 52.206012-76.305897 91.50097-139.435703 117.916597l75.743078 120.500445C245.476319 878.06835 321.782216 808.647257 369.981984 716.848505c36.744879-68.857251 55.085596-180.185802 55.085596-333.957001L425.06758 98.858542 92.832803 98.858542l0 359.77604L254.647189 458.634582z\'%3e%3c/path%3e%3c/svg%3e");';
        echo '}';

        echo '#' . $this->id . ' .feedback-item-avatar {';
        echo 'width: 72px;';
        echo 'height: 72px;';
        echo 'margin: 0 auto;';
        echo 'border-radius: 50%;';
        echo 'overflow:hidden;';
        echo '}';

        echo '#' . $this->id . ' .feedback-item-avatar img {';
        echo 'max-width: 100%;';
        echo '}';

        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            ?>
            <div class="feedback">
                <div class="feedback-overlay"></div>

                <div class="be-container">

                    <div class="feedback-head">
                        <div class="title-separator"><div class="title-separator-diamond"></div></div>
                        <div class="be-mt-100 be-fs-300 be-fw-600 title-font"><?php echo $this->config->title; ?></div>
                        <div class="be-mt-200 be-fs-110 be-c-444 be-lh-200"><?php echo $this->config->description; ?></div>
                    </div>

                    <div class="feedback-body">
                        <div class="feedback-items">
                        <?php
                        if (isset($this->config->items) && is_array($this->config->items) && count($this->config->items) > 0) {
                            foreach ($this->config->items as $item) {
                                $itemConfig = $item['config'];
                                if ($itemConfig->enable) {
                                    echo '<div class="feedback-item">';
                                    echo '<div class="feedback-item-padding">';
                                    echo '<div class="feedback-item-container">';
                                    echo '<i class="feedback-item-quote-start"></i>';
                                    switch ($item['name']) {
                                        case 'Message':
                                            echo '<div class="feedback-item-avatar"><img src="' . $itemConfig->avatar . '" alt="' . $itemConfig->name . '"></div>';
                                            echo '<div class="be-mt-100 be-lh-200">' . $itemConfig->content . '</div>';
                                            echo '<div class="be-mt-100 be-fs-125 be-fw-bold title-font">' . $itemConfig->name . '</div>';
                                            echo '<div class="be-mt-100 be-fs-90 be-c-999">' . $itemConfig->job . '</div>';
                                            break;
                                    }
                                    echo '<i class="feedback-item-quote-end"></i>';
                                    echo '</div>';
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
            <?php
        }
    }
}


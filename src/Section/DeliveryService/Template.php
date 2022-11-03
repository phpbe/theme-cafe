<?php
namespace Be\Theme\Cafe\Section\DeliveryService;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle', 'center'];

    private function css()
    {
        $configTheme = \Be\Be::getConfig('Theme.Cafe.Theme');

        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('delivery-service');
        echo $this->getCssPadding('delivery-service');

        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .delivery-service {';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: center center;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: cover;';
            echo '}';
        }

        echo '#' . $this->id . ' .delivery-service-side-left {';
        echo '}';

        echo '#' . $this->id . ' .delivery-service-side-left img {';
        echo 'max-width: 100%;';
        echo '}';

        echo '#' . $this->id . ' .delivery-service-side-right {';
        echo 'display: flex;';
        echo 'align-items: center;';
        echo '}';


        echo '#' . $this->id . ' .delivery-service-icon-check {';
        echo 'display: inline-block;';
        echo 'width: 2.5rem;';
        echo 'height: 2.5rem;';
        echo 'background-size: 2.5rem 2.5rem;';
        echo 'background-repeat: no-repeat;';
        echo 'background-position: center center;';
        echo 'background-image: url("data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 16 16\'%3e%3cpath fill=\'' . str_replace('#', '%23', $configTheme->majorColor) . '\' d=\'M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z\'/%3e%3c/svg%3e");';
        echo '}';


        // ============================================================================================================= 手机端
        echo '@media (max-width: 992px) {';

        echo '#' . $this->id . ' .delivery-service-head {';
        echo 'text-align: center;';
        echo '}';

        echo '#' . $this->id . ' .delivery-service-body .delivery-service-side-left {';
        echo 'text-align: center;';
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
            <div class="delivery-service">
                <div class="be-container">

                    <div class="be-row delivery-service-head">
                        <div class="be-col-24 be-lg-col delivery-service-side-left">
                            <div class="title-separator"><div class="title-separator-diamond"></div></div>
                            <div class="be-mt-100 be-fs-300 be-fw-600 title-font"><?php echo $this->config->title; ?></div>
                        </div>
                        <div class="be-col-24 be-lg-col-auto"><div class="be-pl-200 be-mt-100"></div></div>
                        <div class="be-col-24 be-lg-col delivery-service-side-right">
                            <div>
                                <div class="be-fs-110 be-c-444 be-lh-200"><?php echo $this->config->description; ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="be-row be-mt-200 delivery-service-body">
                        <div class="be-col-24 be-lg-col delivery-service-side-left">
                            <img src="<?php echo $this->config->image; ?>" alt="<?php echo $this->config->title; ?>">
                        </div>
                        <div class="be-col-24 be-lg-col-auto"><div class="be-pl-200 be-mt-200"></div></div>
                        <div class="be-col-24 be-lg-col delivery-service-side-right">
                            <?php
                            if (isset($this->config->items) && is_array($this->config->items) && count($this->config->items) > 0) {
                                echo '<div class="delivery-service-items">';
                                foreach ($this->config->items as $item) {
                                    $itemConfig = $item['config'];
                                    if ($itemConfig->enable) {
                                        echo '<div class="delivery-service-item be-py-100">';
                                        switch ($item['name']) {
                                            case 'Item':
                                                echo '<div class="be-row">';
                                                echo '<div class="be-col-auto">';
                                                echo '<div class="be-pr-150"><i class="delivery-service-icon-check"></i></div>';
                                                echo '</div>';
                                                echo '<div class="be-col">';
                                                echo '<div class="be-fs-150 be-fw-600 title-font">' . $itemConfig->title . '</div>';
                                                echo '<div class="be-fs-80 be-mt-100 be-c-666">' . $itemConfig->description . '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                                break;
                                        }
                                        echo '</div>';
                                    }
                                }
                                echo '</div>';
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


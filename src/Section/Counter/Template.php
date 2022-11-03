<?php
namespace Be\Theme\Cafe\Section\Counter;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle', 'center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('counter');
        echo $this->getCssPadding('counter');

        echo '#' . $this->id . ' .counter-side-left {';
        echo '}';

        echo '#' . $this->id . ' .counter-side-left img {';
        echo 'max-width: 100%;';
        echo '}';

        echo '#' . $this->id . ' .counter-side-right {';
        echo 'display: flex;';
        echo 'align-items: center;';
        echo '}';


        echo '#' . $this->id . ' .counter-icon-circle {';
        echo 'margin-top: 1rem;';
        echo 'width: 3rem;';
        echo 'height: 3rem;';
        echo 'padding: .75rem;';
        echo 'border-radius: 50%;';
        echo 'background-color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .counter-icon {';
        echo 'display: inline-block;';
        echo 'width: 1.5rem;';
        echo 'height: 1.5rem;';
        echo 'background-size: 1.5rem 1.5rem;';
        echo 'background-repeat: no-repeat;';
        echo 'background-position: center center;';
        echo '}';

        echo '#' . $this->id . ' .counter-icon-baristas {';
        echo 'background-image: url("data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 16 16\'%3e%3cpath fill=\'%23fff\' d=\'M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z\'/%3e%3cpath fill-rule=\'evenodd\' fill=\'%23fff\' d=\'M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z\'/%3e%3cpath fill=\'%23fff\' d=\'M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z\'/%3e%3c/svg%3e");';
        echo '}';

        echo '#' . $this->id . ' .counter-icon-coffee-shops {';
        echo 'background-image: url("data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 16 16\'%3e%3cpath fill=\'%23fff\' fill-rule=\'evenodd\' d=\'M.11 3.187A.5.5 0 0 1 .5 3h13a.5.5 0 0 1 .488.608l-.22.991a3.001 3.001 0 0 1-1.3 5.854l-.132.59A2.5 2.5 0 0 1 9.896 13H4.104a2.5 2.5 0 0 1-2.44-1.958L.012 3.608a.5.5 0 0 1 .098-.42Zm12.574 6.288a2 2 0 0 0 .866-3.899l-.866 3.9Z\'/%3e%3c/svg%3e");';
        echo '}';

        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            ?>
            <div class="counter">
                <div class="counter-overlay"></div>
                <div class="be-container">
                    <div class="be-row">
                        <div class="be-col-24 be-lg-col counter-side-left">
                            <img src="<?php echo $this->config->image; ?>" alt="<?php echo $this->config->title; ?>">
                        </div>
                        <div class="be-col-24 be-lg-col-auto"><div class="be-pl-400 be-mt-200"></div></div>
                        <div class="be-col-24 be-lg-col counter-side-right">
                            <div>
                                <div class="title-separator"><div class="title-separator-diamond"></div></div>
                                <div class="be-mt-100 be-fs-300 be-fw-600 title-font"><?php echo $this->config->title; ?></div>
                                <div class="be-mt-200 be-fs-110 be-c-444 be-lh-200"><?php echo $this->config->description; ?></div>

                                <div class="be-row">
                                    <div class="be-col-auto">
                                        <div class="counter-icon-circle">
                                            <i class="counter-icon counter-icon-baristas"></i>
                                        </div>
                                    </div>
                                    <div class="be-col-auto">
                                        <div class="be-pl-100" style="min-width: 6rem">
                                            <div class="be-fs-300 be-fw-bold title-font js-counter"><?php echo $this->config->baristas; ?></div>
                                            <div class="be-mt-100 be-c-777">Baristas</div>
                                        </div>
                                    </div>
                                    <div class="be-col-auto">
                                        <div class="be-pl-200">
                                            <div class="counter-icon-circle">
                                                <i class="counter-icon counter-icon-coffee-shops"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="be-col-auto">
                                        <div class="be-pl-100">
                                            <div class="be-fs-300 be-fw-bold title-font js-counter"><?php echo $this->config->coffeeShops; ?></div>
                                            <div class="be-mt-100 be-c-777">Coffee Shops</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <script>
                let counterTimer = setInterval(function () {
                    let livingCounter = 0;
                    $(".js-counter").each(function () {
                        let $e = $(this);
                        if ($e.data("counter-init") !== "1") {
                            $e.data("counter-init", "1");
                            $e.data("counter-max", $e.html());
                            $e.html(0);
                        }

                        let current = Number($e.html());
                        let max = Number($e.data("counter-max"));
                        if (current < max) {
                            let diff = max - current;
                            current += diff > 10 ? Math.floor(diff/10) : 1;
                            $e.html(current);
                            livingCounter++;
                        }
                    });

                    if (livingCounter === 0) {
                        clearInterval(counterTimer)
                    }
                }, 50);

            </script>
            <?php
        }
    }
}


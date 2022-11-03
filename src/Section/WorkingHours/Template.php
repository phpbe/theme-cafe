<?php
namespace Be\Theme\Cafe\Section\WorkingHours;

use Be\Be;
use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle', 'center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('working-hours');
        echo $this->getCssPadding('working-hours');

        echo '#' . $this->id . ' .working-hours a:hover {';
        echo 'color: #fff;';
        echo '}';

        echo '#' . $this->id . ' .working-hours .title-separator {';
        echo 'border-color: #ECC493;';
        echo '}';

        echo '#' . $this->id . ' .working-hours .title-separator-diamond {';
        echo 'background-color: #ECC493;';
        echo '}';

        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .working-hours {';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: center right;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: 350px auto;';
            echo '}';
        }

        if ($this->config->overlayImage !== '') {
            echo '#' . $this->id . ' .working-hours {';
            echo 'position: relative;';
            echo '}';

            echo '#' . $this->id . ' .working-hours-overlay {';
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

        echo '#' . $this->id . ' .working-hours-map {';
        echo 'height: 100%;';
        echo '}';

        echo '#' . $this->id . ' .working-hours-map iframe {';
        echo 'width: 100%;';
        echo 'height: 100%;';
        echo 'filter: brightness( 62% ) contrast( 100% ) saturate( 0% ) blur( 0px ) hue-rotate( 22deg );';
        echo '}';


        echo '#' . $this->id . ' .working-hours-items {';
        echo 'border: #ECC493 1px solid;';
        echo 'padding: 3rem 2rem;';
        echo '}';

        echo '#' . $this->id . ' .working-hours-item-title-line {';
        echo 'border-top: #ECC493 1px dotted;';
        echo 'margin: .75rem 1rem 0 1rem;';
        echo '}';

        // ============================================================================================================= 手机端
        echo '@media (max-width: 992px) {';

        echo '#' . $this->id . ' .working-hours-head {';
        echo 'text-align: center;';
        echo '}';

        echo '#' . $this->id . ' .working-hours-map iframe {';
        echo 'height: 450px;';
        echo '}';

        echo '}';
        // ============================================================================================================= 手机端


        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();

            $configCompanyContact = Be::getConfig('App.Company.Contact')
            ?>
            <div class="working-hours">
                <div class="working-hours-overlay"></div>

                <div class="be-container">

                    <div class="be-row working-hours-head">
                        <div class="be-col-24 be-lg-col">
                            <div class="title-separator"><div class="title-separator-diamond"></div></div>
                            <div class="be-mt-100 be-fs-300 be-fw-600 be-c-fff title-font"><?php echo $this->config->title; ?></div>
                        </div>
                        <div class="be-col-24 be-lg-col-auto"><div class="be-pl-200 be-mt-100"></div></div>
                        <div class="be-col-24 be-lg-col">
                            <?php if ($this->config->description !== '') { ?>
                                <div class="be-fs-110 be-c-444 be-lh-200 be-c-ccc"><?php echo $this->config->description; ?></div>
                            <?php } ?>

                            <?php if ($this->config->linkText !== '') { ?>
                            <div class="be-mt-200">
                                <a href="<?php echo $this->config->linkUrl; ?>"><?php echo $this->config->linkText; ?></a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="be-mt-300">
                        <div class="be-row">
                            <div class="be-col-24 be-lg-col">
                                <div class="working-hours-map">
                                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo beUrl('Company.Contact.'.$configCompanyContact->mapType.'Map'); ?>"></iframe>
                                </div>
                            </div>
                            <div class="be-col-24 be-lg-col-auto"><div class="be-pl-200 be-mt-200"></div></div>
                            <div class="be-col-24 be-lg-col">
                                <div class="working-hours-items">
                                    <div class="be-fs-150 be-fw-bold be-c-fff title-font"><?php echo $configCompanyContact->workingHoursTitle; ?></div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursMonday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursMondayRange; ?></div></div>
                                    </div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursTuesday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursTuesdayRange; ?></div></div>
                                    </div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursWednesday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursWednesdayRange; ?></div></div>
                                    </div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursThursday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursThursdayRange; ?></div></div>
                                    </div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursFriday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursFridayRange; ?></div></div>
                                    </div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursSaturday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursSaturdayRange; ?></div></div>
                                    </div>
                                    <div class="be-row be-mt-200">
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursSunday; ?></div></div>
                                        <div class="be-col"><div class="be-row working-hours-item-title-line"></div></div>
                                        <div class="be-col-auto"><div class="be-c-fff"><?php echo $configCompanyContact->workingHoursSundayRange; ?></div></div>
                                    </div>
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


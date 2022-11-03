<?php
namespace Be\Theme\Cafe\Section\Video;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['middle', 'center'];

    private function css()
    {
        echo '<style type="text/css">';
        echo $this->getCssBackgroundColor('video');
        echo $this->getCssPadding('video');

        if ($this->config->backgroundImage !== '') {
            echo '#' . $this->id . ' .video {';
            echo 'background-image: url(' . $this->config->backgroundImage . ');';
            echo 'background-position: center center;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: cover;';
            echo '}';
        }

        if ($this->config->overlayImage !== '') {
            echo '#' . $this->id . ' .video {';
            echo 'position: relative;';
            echo '}';

            echo '#' . $this->id . ' .video-overlay {';
            echo 'background-image: url(' . $this->config->overlayImage . ');';
            echo 'background-position: center center;';
            echo 'background-repeat: no-repeat;';
            echo 'background-size: cover;';
            echo 'opacity: .4;';
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

        echo '#' . $this->id . ' .video-head {';
        echo 'max-width: 560px;';
        echo 'margin: 0 auto;';
        echo 'text-align:center;';
        echo '}';

        echo '#' . $this->id . ' .video-body {';
        echo 'margin-top: 2rem;';
        echo 'position: relative;';
        echo '}';

        echo '#' . $this->id . ' .video-image {';
        echo 'position: relative;';
        echo 'z-index: 1;';
        echo '}';

        echo '#' . $this->id . ' .video-image img {';
        echo 'width: 100%;';
        echo '}';


        echo '#' . $this->id . ' .video-play-icon {';
        echo 'position: absolute;';
        echo 'z-index: 2;';
        echo 'left: 50%;';
        echo 'top: 50%;';
        echo 'transform: translate(-50%,-50%);';
        echo 'width: 5rem;';
        echo 'height: 5rem;';
        echo 'padding: 1rem;';
        echo 'background-color: #fff;';
        echo 'border-radius: 50%;';
        echo 'opacity: .6;';
        echo 'cursor: pointer;';
        echo 'overflow: hidden;';
        echo 'transition: all 0.3s ease;';
        echo '}';

        echo '#' . $this->id . ' .video-play-icon svg {';
        echo 'width: 3rem;';
        echo 'height: 3rem;';
        echo '}';


        echo '#' . $this->id . ' .video-play-icon:hover {';
        echo 'width: 6rem;';
        echo 'height: 6rem;';
        echo 'padding: 1.5rem;';
        echo '}';

        echo '#' . $this->id . ' .video-play-icon:hover svg {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .video-frame {';
        echo 'background-color: #000;';
        echo 'position: absolute;';
        echo 'left: 0;';
        echo 'top: 0;';
        echo 'width: 100%;';
        echo 'height: 100%;';
        echo 'z-index: 3;';
        echo 'display: none;';
        echo '}';


        echo '#' . $this->id . ' .video-frame iframe {';
        echo 'width: 100%;';
        echo 'height: 100%;';
        echo 'border: 0;';
        echo '}';

        echo '</style>';
    }

    public function display()
    {
        if ($this->config->enable) {
            $this->css();
            ?>
            <div class="video">
                <div class="video-overlay"></div>
                <div class="be-container">

                    <div class="video-head">
                        <div class="title-separator"><div class="title-separator-diamond"></div></div>
                        <div class="be-mt-100 be-fs-300 be-fw-600 title-font"><?php echo $this->config->title; ?></div>
                        <div class="be-mt-200 be-fs-110 be-c-444 be-lh-200"><?php echo $this->config->description; ?></div>
                    </div>


                    <div class="video-body">
                        <div class="video-image">
                            <img src="<?php echo $this->config->image; ?>" alt="<?php echo $this->config->title; ?>">
                        </div>

                        <div class="video-play-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                            </svg>
                        </div>

                        <div class="video-frame">
                            <iframe src="about:blank" frameborder="0" allowfullscreen="1" allow="autoplay;encrypted-media;"></iframe>
                        </div>
                    </div>

                </div>
            </div>

            <script>
                $("#<?php echo $this->id?> .video-play-icon").click(function () {
                    let $e = $("#<?php echo $this->id?> .video-frame");
                    $e.show();
                    $e.find("iframe").attr("src", "<?php echo $this->config->video; ?>");
                });
            </script>
            <?php
        }
    }
}


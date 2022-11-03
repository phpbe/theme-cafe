<?php
namespace Be\Theme\Cafe\Section\HeaderSlider;

/**
 * @BeConfig("头部轮播图", ordering="2")
 */
class Config
{

    /**
     * @BeConfigItem("旋转文字",
     *     driver = "FormItemInput"
     * )
     */
    public string $rotateText = '100% PREMIUM QUALITY COFFEE';

    /**
     * @BeConfigItem("背景颜色",
     *     driver = "FormItemColorPicker"
     * )
     */
    public string $backgroundColor = '#FFF8F1';

    /**
     * @BeConfigItem("背景图像",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $backgroundImage = '';

    /**
     * @BeConfigItem("托盘背景图像",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $trayBackgroundImage = '';

    /**
     * @BeConfigItem("内边距 （手机端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingMobile = '6rem 0 0 0';

    /**
     * @BeConfigItem("内边距 （平板端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingTablet = '6rem 0 0 0';

    /**
     * @BeConfigItem("内边距 （电脑端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingDesktop = '5rem 0 0 0';

    /**
     * @BeConfigItem("子项",
     *     driver = "FormItemsMixedConfigs",
     *     items = "return [
     *          \Be\Theme\Cafe\Section\HeaderSlider\Item\Image::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();

        $this->backgroundImage = $wwwUrl . '/images/header-bg.png';
        $this->trayBackgroundImage = $wwwUrl . '/images/header-slider-bg.png';

        $this->items = [
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/header-sliders/1.png',
                    'title' => 'Latte',
                ],
            ],
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/header-sliders/2.png',
                    'title' => 'Espresso',
                ],
            ],
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/header-sliders/3.png',
                    'title' => 'Mocha',
                ],
            ],
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/header-sliders/4.png',
                    'title' => 'Cappuccino',
                ],
            ],
        ];
    }


    public function __icon() {
        return '<svg viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M1 2.5V9h18V2.5A1.5 1.5 0 0 0 17.5 1h-15A1.5 1.5 0 0 0 1 2.5zM2 19a1 1 0 0 1-1-1v-2h2v1h1v2H2zm17-1a1 1 0 0 1-1 1h-2v-2h1v-1h2v2zM1 14v-3h2v3H1zm16-3v3h2v-3h-2zM6 17h3v2H6v-2zm8 0h-3v2h3v-2z"></path></svg>';
    }

}

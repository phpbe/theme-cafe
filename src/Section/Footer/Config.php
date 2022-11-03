<?php

namespace Be\Theme\Cafe\Section\Footer;

/**
 * @BeConfig("底部")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("版权信息",
     *     driver = "FormItemTinymce"
     * )
     */
    public string $copyright = 'Copyright &copy;2022  Cafe. All rights reserved.';

    /**
     * @BeConfigItem("背景颜色",
     *     driver="FormItemColorPicker"
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
     * @BeConfigItem("内边距 （手机端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingMobile = '5rem 0 3rem 0';

    /**
     * @BeConfigItem("内边距 （平板端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingTablet = '5rem 0 3rem 0';

    /**
     * @BeConfigItem("内边距 （电脑端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingDesktop = '5rem 0 3rem 0';


    /**
     * @BeConfigItem("子项",
     *     driver = "FormItemsConfigs",
     *     items = "return [
     *          \Be\Theme\Cafe\Section\Footer\Item\RichText::class,
     *          \Be\Theme\Cafe\Section\Footer\Item\Subscribe::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();

        $this->backgroundImage = $wwwUrl . '/images/footer/bg.png';

        $this->items = [
            [
                'name' => 'RichText',
                'config' => (object)[
                    'enable' => 1,
                    'title' => 'Cafe',
                    'description' => 'There are people who can’t start their day without having a freshly brewed cup of coffee and we understand them.',
                    'cols' => 1,
                ],
            ],

            [
                'name' => 'RichText',
                'config' => (object)[
                    'enable' => 1,
                    'title' => '',
                    'description' => '<p>CONTACT US</p><p>555 Arabica Springs Rd, Crawford, TN 38554</p><p>Call Us: <strong><a href="tel:800.275.8777">123.456.7890</a></strong></p><p><a href="mailto:coffo@company.com">cafe@company.com</a></p>',
                    'cols' => 1,
                ],
            ],
            [
                'name' => 'Subscribe',
                'config' => (object)[
                    'enable' => 1,
                    'title' => 'SUBSCRIBE TO NEWSLETTER',
                    'description' => 'Submit your email address to receive news and updates',
                    'cols' => 1,
                ],
            ],
        ];
    }


    public function __icon()
    {
        return '<svg viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M1 2a1 1 0 0 1 1-1h2v2H3v1H1V2zm17-1a1 1 0 0 1 1 1v2h-2V3h-1V1h2zm1 16.5V11H1v6.5A1.5 1.5 0 0 0 2.5 19h15a1.5 1.5 0 0 0 1.5-1.5zM19 6v3h-2V6h2zM3 9V6H1v3h2zm11-8v2h-3V1h3zM9 3V1H6v2h3z"></path></svg>';
    }

}

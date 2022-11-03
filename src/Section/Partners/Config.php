<?php
namespace Be\Theme\Cafe\Section\Partners;


/**
 * @BeConfig("合作伙伴", icon="el-icon-s-custom")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'Our partners';

    /**
     * @BeConfigItem("内容详细",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = 'There are people who can’t start their day without having a freshly brewed cup of coffee and we understand them.';

    /**
     * @BeConfigItem("背景图像",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $backgroundImage = '';

    /**
     * @BeConfigItem("背景图像（左）",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $overlayImage = '';

    /**
     * @BeConfigItem("内边距 （手机端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingMobile = '4rem 0';

    /**
     * @BeConfigItem("内边距 （平板端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingTablet = '4rem 0';

    /**
     * @BeConfigItem("内边距 （电脑端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingDesktop = '6rem 0';

    /**
     * @BeConfigItem("子项",
     *     driver = "FormItemsConfigs",
     *     items = "return [
     *          \Be\Theme\Cafe\Section\Partners\Item\Partner::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();

        $this->backgroundImage = $wwwUrl . '/images/partners/bg.png';
        $this->overlayImage = $wwwUrl . '/images/partners/overlay.png';

        $this->items = [
            [
                'name' => 'Partner',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/partners/partner-1.png',
                ],
            ],
            [
                'name' => 'Partner',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/partners/partner-2.png',
                ],
            ],
            [
                'name' => 'Partner',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/partners/partner-3.png',
                ],
            ],
            [
                'name' => 'Partner',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/partners/partner-4.png',
                ],
            ],
            [
                'name' => 'Partner',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/partners/partner-5.png',
                ],
            ],
        ];

    }

}

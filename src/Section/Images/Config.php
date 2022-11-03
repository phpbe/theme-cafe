<?php
namespace Be\Theme\Cafe\Section\Images;


/**
 * @BeConfig("一组图像", icon="el-icon-menu")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("鼠标悬停效果",
     *     driver = "FormItemSelect",
     *     keyValues = "return ['none' => '无', 'scale' => '放大', 'rotateScale' => '旋转放大'];"
     * )
     */
    public string $hoverEffect = 'scale';

    /**
     * @BeConfigItem("背景颜色",
     *     driver = "FormItemColorPicker"
     * )
     */
    public string $backgroundColor = '#FFFFFF';

    /**
     * @BeConfigItem("内边距 （手机端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingMobile = '1rem 0';

    /**
     * @BeConfigItem("内边距 （平板端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingTablet = '1rem 0';

    /**
     * @BeConfigItem("内边距 （电脑端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingDesktop = '1rem 0';

    /**
     * @BeConfigItem("间距 （手机端）",
     *     driver = "FormItemInput"
     * )
     */
    public string $spacingMobile = '1rem';

    /**
     * @BeConfigItem("间距 （平板端）",
     *     driver = "FormItemInput"
     * )
     */
    public string $spacingTablet = '1rem';

    /**
     * @BeConfigItem("间距 （电脑端）",
     *     driver = "FormItemInput"
     * )
     */
    public string $spacingDesktop = '1rem';

    /**
     * @BeConfigItem("子项",
     *     driver = "FormItemsConfigs",
     *     items = "return [
     *          \Be\Theme\Cafe\Section\Images\Item\Image::class,
     *     ]"
     * )
     */
    public array $items = [];

    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();
        $this->items = [
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/items/1.jpeg',
                    'link' => '',
                ],
            ],
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/items/2.jpeg',
                    'link' => '',
                ],
            ],
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/items/3.jpeg',
                    'link' => '',
                ],
            ],
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/items/4.jpeg',
                    'link' => '',
                ],
            ],
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/items/5.jpeg',
                    'link' => '',
                ],
            ],
            [
                'name' => 'Image',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/items/6.jpeg',
                    'link' => '',
                ],
            ],
        ];
    }

}

<?php
namespace Be\Theme\Cafe\Section\Products;


/**
 * @BeConfig("产品", icon="el-icon-s-grid")
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
    public string $title = 'Our menu';

    /**
     * @BeConfigItem("内容详细",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = '';

    /**
     * @BeConfigItem("背景颜色",
     *     driver = "FormItemColorPicker"
     * )
     */
    public string $backgroundColor = '#313538';

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
    public string $paddingMobile = '6rem 0';

    /**
     * @BeConfigItem("内边距 （平板端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingTablet = '7rem 0';

    /**
     * @BeConfigItem("内边距 （电脑端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingDesktop = '8rem 0';

    /**
     * @BeConfigItem("间距 （手机端）",
     *     driver = "FormItemInput"
     * )
     */
    public string $spacingMobile = '4rem';

    /**
     * @BeConfigItem("间距 （平板端）",
     *     driver = "FormItemInput"
     * )
     */
    public string $spacingTablet = '4rem';

    /**
     * @BeConfigItem("间距 （电脑端）",
     *     driver = "FormItemInput"
     * )
     */
    public string $spacingDesktop = '4rem';

    /**
     * @BeConfigItem("子项",
     *     driver = "FormItemsConfigs",
     *     items = "return [
     *          \Be\Theme\Cafe\Section\Products\Item\Product::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();

        $this->backgroundImage = $wwwUrl . '/images/products/bg.png';
        $this->overlayImage = $wwwUrl . '/images/products/overlay.png';

        $this->items = [
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/product-1.png',
                    'title' => 'Croissant',
                    'description' => 'A product made of puff pastry in the form of a bagel, with or without filling.',
                    'price' => '$5.3',
                ],
            ],
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/product-2.png',
                    'title' => 'Puff bun',
                    'description' => 'A product made of puff pastry in the form of a bagel, with or without filling.',
                    'price' => '$2.5',
                ],
            ],
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/product-3.png',
                    'title' => 'Cheesecake',
                    'description' => 'Cake made with cream and soft cheese on cookie, or pastry crust topped with a fruit sauce.',
                    'price' => '$4.5',
                ],
            ],
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/product-4.png',
                    'title' => 'Banana cake',
                    'description' => 'Cake made with cream and soft cheese on cookie, or pastry crust topped with a fruit sauce.',
                    'price' => '$7.5',
                ],
            ],
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/product-5.png',
                    'title' => 'Chocolate brownie',
                    'description' => 'A product made of puff pastry in the form of a bagel, with or without filling.',
                    'price' => '$6.2',
                ],
            ],
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/product-6.png',
                    'title' => 'Cupcakes with cream',
                    'description' => 'A product made of puff pastry in the form of a bagel, with or without filling.',
                    'price' => '$6.2',
                ],
            ],
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/product-7.png',
                    'title' => 'Spanish ensaimada',
                    'description' => 'A product made of puff pastry in the form of a bagel, with or without filling.',
                    'price' => '$7.1',
                ],
            ],
            [
                'name' => 'Product',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/products/product-8.png',
                    'title' => 'Cinnamon bun',
                    'description' => 'A product made of puff pastry in the form of a bagel, with or without filling.',
                    'price' => '$7.1',
                ],
            ],
        ];

    }

}

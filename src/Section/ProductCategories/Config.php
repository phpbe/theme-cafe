<?php
namespace Be\Theme\Cafe\Section\ProductCategories;


/**
 * @BeConfig("产品分类", icon="el-icon-menu")
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
    public string $title = 'Explore our <br>coffee shop';

    /**
     * @BeConfigItem("内容详细",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = 'There are people who can’t start their day without having a freshly brewed cup of coffee and we understand them.';

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
    public string $paddingTablet = '5rem 0';

    /**
     * @BeConfigItem("内边距 （电脑端）",
     *     driver = "FormItemInput",
     *     description = "上右下左（CSS padding 语法）"
     * )
     */
    public string $paddingDesktop = '6rem 0';

    /**
     * @BeConfigItem("间距 （手机端）",
     *     driver = "FormItemInput"
     * )
     */
    public string $spacingMobile = '2rem';

    /**
     * @BeConfigItem("间距 （平板端）",
     *     driver = "FormItemInput"
     * )
     */
    public string $spacingTablet = '2rem';

    /**
     * @BeConfigItem("间距 （电脑端）",
     *     driver = "FormItemInput"
     * )
     */
    public string $spacingDesktop = '2rem';

    /**
     * @BeConfigItem("子项",
     *     driver = "FormItemsConfigs",
     *     items = "return [
     *          \Be\Theme\Cafe\Section\ProductCategories\Item\Category::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();

        $this->backgroundImage = $wwwUrl . '/images/product-categories/bg.png';

        $this->items = [
            [
                'name' => 'Category',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/product-categories/category-1.png',
                    'title' => 'Brewed coffee',
                    'description' => 'You can order our coffee in the online store or find our store in your city.',
                    'linkText' => 'EXPLORE &rarr;',
                    'linkUrl' => '#',
                ],
            ],
            [
                'name' => 'Category',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/product-categories/category-2.png',
                    'title' => 'Coffee beans',
                    'description' => 'You can order our coffee in the online store or find our store in your city.',
                    'linkText' => 'EXPLORE &rarr;',
                    'linkUrl' => '#',
                ],
            ],
            [
                'name' => 'Category',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/product-categories/category-3.png',
                    'title' => 'Ground coffee',
                    'description' => 'You can order our coffee in the online store or find our store in your city.',
                    'linkText' => 'EXPLORE &rarr;',
                    'linkUrl' => '#',
                ],
            ],
            [
                'name' => 'Category',
                'config' => (object)[
                    'enable' => 1,
                    'image' => $wwwUrl . '/images/product-categories/category-4.png',
                    'title' => 'Deserts',
                    'description' => 'You can order our coffee in the online store or find our store in your city.',
                    'linkText' => 'EXPLORE &rarr;',
                    'linkUrl' => '#',
                ],
            ],
        ];
    }

}

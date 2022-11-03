<?php
namespace Be\Theme\Cafe\Section\DeliveryService;


/**
 * @BeConfig("配送服务", icon="el-icon-truck")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("内容标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'Delivery service';

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
     * @BeConfigItem("图像",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $image = '';

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
     * @BeConfigItem("子项",
     *     driver = "FormItemsConfigs",
     *     items = "return [
     *          \Be\Theme\Cafe\Section\DeliveryService\Item\Item::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();

        $this->backgroundImage = $wwwUrl . '/images/delivery-service/bg.png';
        $this->image = $wwwUrl . '/images/delivery-service/image.png';

        $this->items = [
            [
                'name' => 'Item',
                'config' => (object)[
                    'enable' => 1,
                    'title' => 'You place the order',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut abore et dolore magna',
                ],
            ],
            [
                'name' => 'Item',
                'config' => (object)[
                    'enable' => 1,
                    'title' => 'We grind coffee',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut abore et dolore magna',
                ],
            ],
            [
                'name' => 'Item',
                'config' => (object)[
                    'enable' => 1,
                    'title' => 'Pack the order',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut abore et dolore magna',
                ],
            ],
            [
                'name' => 'Item',
                'config' => (object)[
                    'enable' => 1,
                    'title' => 'Deliver on time',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut abore et dolore magna',
                ],
            ],
        ];

    }

}

<?php
namespace Be\Theme\Cafe\Section\Counter;


/**
 * @BeConfig("计数", icon="el-icon-postcard")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("图像",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $image = '';

    /**
     * @BeConfigItem("咖啡师", driver="FormItemInputNumberInt")
     */
    public int $baristas = 345;

    /**
     * @BeConfigItem("店铺数", driver="FormItemInputNumberInt")
     */
    public int $coffeeShops = 124;

    /**
     * @BeConfigItem("内容标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'Enjoy the best high quality coffee';

    /**
     * @BeConfigItem("内容详细",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = 'Our coffee bar uses only Ethiopian coffee. All commercially produced coffee originates from Ethiopia. We love Ethiopia for providing the world with coffee to grow, and we continue to love the flavor of that country’s coffee.';

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


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();

        $this->image = $wwwUrl . '/images/counter/image.png';

    }

}

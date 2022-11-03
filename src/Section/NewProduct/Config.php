<?php
namespace Be\Theme\Cafe\Section\NewProduct;


/**
 * @BeConfig("新品", icon="el-icon-star-off")
 */
class Config
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("背景图像（左）",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $backgroundImage = '';

    /**
     * @BeConfigItem("背景图像（右）",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $overlayImage = '';

    /**
     * @BeConfigItem("背景图像（底图）",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $imageBackgroundImage = '';

    /**
     * @BeConfigItem("图像",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $image = '';

    /**
     * @BeConfigItem("旋转文字",
     *     driver = "FormItemInput"
     * )
     */
    public string $rotateText = '100% PREMIUM QUALITY COFFEE';

    /**
     * @BeConfigItem("标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'New stunning flavor';

    /**
     * @BeConfigItem("模述",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = 'Our coffee bar uses only Ethiopian coffee. All commercially produced coffee originates from Ethiopia. The fruity acidity of this single origin coffee is balanced by its sweet honey notes, creating soft, light notes with a light character.';

    /**
     * @BeConfigItem("链接文字",
     *     driver = "FormItemInput"
     * )
     */
    public string $linkText = 'GO TO SHOP &rarr;';

    /**
     * @BeConfigItem("链接网址",
     *     driver = "FormItemInput"
     * )
     */
    public string $linkUrl = '#';

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

        $this->backgroundImage = $wwwUrl . '/images/new-product/bg.png';
        $this->imageBackgroundImage = $wwwUrl . '/images/new-product/image-bg.png';
        $this->overlayImage = $wwwUrl . '/images/new-product/overlay.png';
        $this->image = $wwwUrl . '/images/new-product/image.png';

    }

}

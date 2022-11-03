<?php
namespace Be\Theme\Cafe\Section\Story;


/**
 * @BeConfig("品版故事", icon="el-icon-postcard")
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
     * @BeConfigItem("内容标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'Our story';

    /**
     * @BeConfigItem("内容详细",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = 'Our coffee bar uses only Ethiopian coffee. All commercially produced coffee originates from Ethiopia. We love Ethiopia for providing the world with coffee to grow, and we continue to love the flavor of that country’s coffee. The fruity acidity of this single origin coffee is balanced by its sweet honey notes, creating soft, light notes with a light character.';

    /**
     * @BeConfigItem("内容按钮",
     *     driver = "FormItemInput"
     * )
     */
    public string $linkText = 'LEARN MORE &rarr;';

    /**
     * @BeConfigItem("内容按钮链接",
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

        $this->backgroundImage = $wwwUrl . '/images/story/bg.png';
        $this->imageBackgroundImage = $wwwUrl . '/images/story/image-bg.png';
        $this->overlayImage = $wwwUrl . '/images/story/overlay.png';
        $this->image = $wwwUrl . '/images/story/image.png';

    }

}

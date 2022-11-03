<?php
namespace Be\Theme\Cafe\Section\Feedback;


/**
 * @BeConfig("客户反馈", icon="el-icon-chat-line-square")
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
    public string $title = 'Hear from our <br>awesome clients';

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
     * @BeConfigItem("背景图像（右）",
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
     *          \Be\Theme\Cafe\Section\Feedback\Item\Message::class,
     *     ]"
     * )
     */
    public array $items = [];


    public function __construct()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();

        $this->backgroundImage = $wwwUrl . '/images/feedback/bg.png';
        $this->overlayImage = $wwwUrl . '/images/feedback/overlay.png';

        $this->items = [
            [
                'name' => 'Message',
                'config' => (object)[
                    'enable' => 1,
                    'avatar' => $wwwUrl . '/images/feedback/customer-1.png',
                    'name' => 'John Doe',
                    'content' => 'Great! Mauris venenatis est ut ante egestas, at maximus dolor dictum. Donec auctor mauris sit amet euismod tristique.',
                    'job' => 'WEB-DESIGNER',
                ],
            ],
            [
                'name' => 'Message',
                'config' => (object)[
                    'enable' => 1,
                    'avatar' => $wwwUrl . '/images/feedback/customer-2.png',
                    'name' => 'Mark Davidson',
                    'content' => 'Great! Mauris venenatis est ut ante egestas, at maximus dolor dictum. Donec auctor mauris sit amet euismod tristique.',
                    'job' => 'BLOGGER',
                ],
            ],
            [
                'name' => 'Message',
                'config' => (object)[
                    'enable' => 1,
                    'avatar' => $wwwUrl . '/images/feedback/customer-3.png',
                    'name' => 'John Doe',
                    'content' => 'Great! Mauris venenatis est ut ante egestas, at maximus dolor dictum. Donec auctor mauris sit amet euismod tristique.',
                    'job' => 'BLOGGER',
                ],
            ],
        ];

    }

}

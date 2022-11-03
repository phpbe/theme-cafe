<?php
namespace Be\Theme\Cafe\Section\Footer\Item;

/**
 * @BeConfig("订阅", icon="el-icon-fa fa-edit")
 */
class Subscribe
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("标题",
     *     driver="FormItemInput"
     * )
     */
    public string $title = 'SUBSCRIBE TO NEWSLETTER';

    /**
     * @BeConfigItem("描述",
     *     driver="FormItemInput"
     * )
     */
    public string $description = 'Submit your email address to receive news and updates';

    /**
     * @BeConfigItem("所占列数",
     *     description="底部默认有3列",
     *     values="return [1, 2, 3]",
     *     driver="FormItemSelect")
     */
    public int $cols = 1;

}

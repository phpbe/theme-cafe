<?php
namespace Be\Theme\Cafe\Section\Footer\Item;

/**
 * @BeConfig("富文本", icon="el-icon-fa fa-edit")
 */
class RichText
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
    public string $title = '';

    /**
     * @BeConfigItem("内容",
     *     driver="FormItemTinymce"
     * )
     */
    public string $description = '';

    /**
     * @BeConfigItem("所占列数",
     *     description="底部默认有3列",
     *     values="return [1, 2, 3]",
     *     driver="FormItemSelect")
     */
    public int $cols = 1;

}

<?php
namespace Be\Theme\Cafe\Section\DeliveryService\Item;

/**
 * @BeConfig("子项", icon="el-icon-picture")
 */
class Item
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
    public string $title = '';

    /**
     * @BeConfigItem("描述",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $description = '';

}

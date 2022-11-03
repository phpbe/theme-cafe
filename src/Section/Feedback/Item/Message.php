<?php
namespace Be\Theme\Cafe\Section\Feedback\Item;

/**
 * @BeConfig("留言", icon="el-icon-picture")
 */
class Message
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("头像",
     *     driver = "FormItemStorageImage"
     * )
     */
    public string $avatar = '';

    /**
     * @BeConfigItem("名称",
     *     driver = "FormItemInput"
     * )
     */
    public string $name = '';

    /**
     * @BeConfigItem("内容",
     *     driver = "FormItemInputTextArea"
     * )
     */
    public string $content = '';

    /**
     * @BeConfigItem("职位",
     *     driver = "FormItemInput"
     * )
     */
    public string $job = '';

}

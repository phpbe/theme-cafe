<?php
namespace Be\Theme\Cafe\Section\ProductCategories\Item;

/**
 * @BeConfig("分类", icon="el-icon-picture")
 */
class Category
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
    public string $image = '';

    /**
     * @BeConfigItem("标题",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = '';

    /**
     * @BeConfigItem("描述",
     *     driver = "FormItemInput"
     * )
     */
    public string $description = '';

    /**
     * @BeConfigItem("内容按钮",
     *     driver = "FormItemInput"
     * )
     */
    public string $linkText = 'EXPLORE &rarr;';

    /**
     * @BeConfigItem("内容按钮链接",
     *     driver = "FormItemInput"
     * )
     */
    public string $linkUrl = '#';

}

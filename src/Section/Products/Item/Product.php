<?php
namespace Be\Theme\Cafe\Section\Products\Item;

/**
 * @BeConfig("产品", icon="el-icon-box")
 */
class Product
{

    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("图像",
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
     * @BeConfigItem("价格",
     *     driver = "FormItemInput"
     * )
     */
    public string $price = '';

}

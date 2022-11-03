<?php
namespace Be\Theme\Cafe\Section\Partners\Item;

/**
 * @BeConfig("合作伙伴", icon="el-icon-s-custom")
 */
class Partner
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

}

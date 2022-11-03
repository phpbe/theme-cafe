<?php
namespace Be\Theme\Cafe\Section\HeaderSlider\Item;

/**
 * @BeConfig("图像子组件", icon="el-icon-picture")
 */
class Image
{
    /**
     * @BeConfigItem("是否启用",
     *     driver = "FormItemSwitch")
     */
    public int $enable = 1;

    /**
     * @BeConfigItem("图像",
     *     description="建议：500像素 x 500像素 以上",
     *     driver="FormItemStorageImage"
     * )
     */
    public string $image = '';


    /**
     * @BeConfigItem("标题",
     *     driver="FormItemInput"
     * )
     */
    public string $title = '';


}

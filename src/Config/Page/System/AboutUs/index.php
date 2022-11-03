<?php

namespace Be\Theme\Cafe\Config\Page\Cafe\AboutUs;

class index
{

    public int $middle = 1;

    public array $middleSections = [
        [
            'name' => 'Theme.Cafe.Counter',
        ],
        [
            'name' => 'Theme.Cafe.TeamTop',
        ],
        [
            'name' => 'Theme.Cafe.Video',
        ],
        [
            'name' => 'Theme.Cafe.Partners',
        ],
    ];


    /**
     * @BeConfigItem("HEAD头标题",
     *     description="HEAD头标题，用于SEO",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'About Us';

    /**
     * @BeConfigItem("Meta描述",
     *     description="填写页面内容的简单描述，用于SEO",
     *     driver = "FormItemInput"
     * )
     */
    public string $metaDescription = 'There are people who can’t start their day without having a freshly brewed cup of coffee and we understand them.';

    /**
     * @BeConfigItem("Meta关键词",
     *     description="填写页面内容的关键词，用于SEO",
     *     driver = "FormItemInput"
     * )
     */
    public string $metaKeywords = 'About Us';

    /**
     * @BeConfigItem("页面标题",
     *     description="展示在页面内容中的标题，一般与HEAD头标题一致，两者相同时可不填写此项",
     *     driver = "FormItemInput"
     * )
     */
    public string $pageTitle = '';


}

<?php

namespace Be\Theme\Cafe\Config\Page\Cms\Home;

class index
{

    public int $west = 0;
    public int $center = 66;
    public int $east = 34;

    public array $northSections = [
        [
            'name' => 'Theme.Cafe.Header',
        ],
        [
            'name' => 'Theme.Cafe.HeaderSubTitle',
        ],
    ];

    public array $centerSections = [
        [
            'name' => 'Theme.Cafe.AppCmsArticles',
        ],
    ];

    public array $eastSections = [
        [
            'name' => 'Theme.Cafe.AppCmsSearch',
        ],
        [
            'name' => 'Theme.Cafe.AppCmsLatest',
        ],
        [
            'name' => 'Theme.Cafe.AppCmsTags',
        ],
    ];

    /**
     * @BeConfigItem("HEAD头标题",
     *     description="HEAD头标题，用于SEO",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'Blog';

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
    public string $metaKeywords = 'Blog';

    /**
     * @BeConfigItem("页面标题",
     *     description="展示在页面内容中的标题，一般与HEAD头标题一致，两者相同时可不填写此项",
     *     driver = "FormItemInput"
     * )
     */
    public string $pageTitle = '';

}

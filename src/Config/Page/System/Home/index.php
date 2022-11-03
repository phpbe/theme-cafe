<?php

namespace Be\Theme\Cafe\Config\Page\System\Home;

use Be\Be;

class index
{

    public int $north = 1;

    public array $northSections = [
        [
            'name' => 'Theme.Cafe.Header',
        ],
        [
            'name' => 'Theme.Cafe.HeaderSlider',
        ],
    ];


    public int $middle = 1;

    public array $middleSections = [
        [
            'name' => 'Theme.Cafe.Story',
        ],
        [
            'name' => 'Theme.Cafe.ProductCategories',
        ],
        [
            'name' => 'Theme.Cafe.Products',
        ],
        [
            'name' => 'Theme.Cafe.Images',
        ],
        [
            'name' => 'Theme.Cafe.DeliveryService',
        ],
        [
            'name' => 'Theme.Cafe.NewProduct',
        ],
        [
            'name' => 'Theme.Cafe.Banner',
        ],
        [
            'name' => 'Theme.Cafe.Feedback',
        ],
        [
            'name' => 'Theme.Cafe.WorkingHours',
        ],
    ];


    public array $southSections = [
        [
            'name' => 'Theme.Cafe.Footer',
        ],
    ];

    /**
     * @BeConfigItem("HEAD头标题",
     *     description="HEAD头标题，用于SEO",
     *     driver = "FormItemInput"
     * )
     */
    public string $title = 'Great coffee for some joy';

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
    public string $metaKeywords = 'Great coffee for some joy';

    /**
     * @BeConfigItem("页面标题",
     *     description="展示在页面内容中的标题，一般与HEAD头标题一致，两者相同时可不填写此项",
     *     driver = "FormItemInput"
     * )
     */
    public string $pageTitle = 'Great coffee <br>for some joy';


    public function __construct()
    {
        $wwwUrl = Be::getProperty('Theme.Cafe')->getWwwUrl();

        $this->middleSections[6]['config'] = [
            'enable' => 1,
            'backgroundColor' => '#FFF8F1',
            'backgroundImage' => $wwwUrl . '/images/happy-hours-bg.png',
            'title' => 'Happy hours - get 25% off',
            'description' => 'There are people who can’t start their day without having a freshly brewed cup of coffee and we understand them.',
            'buttonText' => 'ORDER NOW',
            'buttonUrl' => '#',
            'paddingMobile' => '4rem',
            'paddingTablet' => '5rem',
            'paddingDesktop' => '6rem',
            'marginMobile' => '0',
            'marginTablet' => '0',
            'marginDesktop' => '0',
        ];
    }

}

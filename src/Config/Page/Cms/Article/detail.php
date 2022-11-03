<?php

namespace Be\Theme\Cafe\Config\Page\Cms\Article;

use Be\Be;

class detail
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
            'name' => 'Theme.Cafe.AppCmsArticleDetail',
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

    public function __construct()
    {
        $northMenu = Be::getMenu('North');
        $menuActiveId = null;
        foreach ($northMenu->getItems() as $item) {
            if (substr($item->route, 0, 11) === 'Cms.Article') {
                $menuActiveId = $item->id;
                break;
            }
        }

        if ($menuActiveId !== null) {
            $northMenu->setActiveId($menuActiveId);
        }
    }

}

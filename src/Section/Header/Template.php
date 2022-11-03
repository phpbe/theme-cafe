<?php

namespace Be\Theme\Cafe\Section\Header;

use Be\Theme\Section;

class Template extends Section
{
    public array $positions = ['north'];

    private function css()
    {
        $configTheme = \Be\Be::getConfig('Theme.Cafe.Theme');
        echo '<style type="text/css">';

        echo '#' . $this->id . '{';
        echo 'position: absolute;';
        echo 'background: transparent;';
        echo 'width: 100%;';
        echo '}';


        echo '#' . $this->id . ' .header {';
        echo '}';


        // ============================================================================================================= 手机端
        echo '@media (max-width: 992px) {';

        echo '#' . $this->id . ' .header-mobile {';
        echo 'display: block;';
        echo 'background-color: #ffffff;';
        echo 'border-bottom: 1px solid rgba(0, 0, 0, 0.04)';
        echo '}';

        echo '#' . $this->id . ' .header-desktop {';
        echo 'display: none;';
        echo '}';

        echo '#' . $this->id . ' .header-mobile-row {';
        echo 'display: flex;';
        echo 'flex-wrap: wrap;';
        echo 'justify-content: space-between;';
        echo 'align-items: center;';
        echo '}';

        echo '#' . $this->id . ' .header-mobile-left-toolbars {';
        echo 'flex: 0 1 auto;';
        echo 'display: flex;';
        echo '}';

        echo '#' . $this->id . ' .header-mobile-right-toolbars {';
        echo 'flex: 0 1 auto;';
        echo 'display: flex;';
        echo 'justify-content: flex-end;';
        echo '}';

        echo '#' . $this->id . ' .header-mobile-left-toolbar a,';
        echo '#' . $this->id . ' .header-mobile-right-toolbar a {';
        echo 'display: block;';
        echo 'color: #000;';
        echo 'text-align: center;';
        echo '}';

        echo '#' . $this->id . ' .header-mobile-left-toolbar a:hover,';
        echo '#' . $this->id . ' .header-mobile-right-toolbar a:hover {';
        echo 'color: #f60;';
        echo 'text-decoration: none;';
        echo '}';

        echo '#' . $this->id . ' .header-mobile-logo {';
        echo '}';

        echo '#' . $this->id . ' .header-mobile-logo img {';
        if ($this->config->logoImageMaxWidth) {
            echo 'max-width:' . $this->config->logoImageMaxWidth . 'px;';
        }
        if ($this->config->logoImageMaxHeight) {
            echo 'max-height:' . min($this->config->logoImageMaxHeight, 40) . 'px;';
        }
        echo '}';

        echo '#' . $this->id . ' .header-icon {';
        echo 'display: inline-block;';
        echo 'border: none;';
        echo 'background-repeat: no-repeat;';
        echo 'background-position: center center;';
        echo 'cursor: pointer;';
        echo '}';

        echo '#' . $this->id . ' .header-icon-menu {';
        echo 'width: 36px;';
        echo 'height: 36px;';
        echo 'background-size: 36px 36px;';
        echo 'background-image: url("data:image/svg+xml,%3csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 16 16\'%3e%3cpath fill=\'' . str_replace('#', '%23', $configTheme->fontColor) . '\' d=\'M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z\'/%3e%3c/svg%3e");';
        echo '}';

        echo '#' . $this->id . ' .header-icon-user {';
        echo 'width: 36px;';
        echo 'height: 36px;';
        echo 'background-size: 36px 36px;';
        echo '}';

        echo '}';
        // ============================================================================================================= 手机端


        // ============================================================================================================= 电脑端
        echo '@media (min-width: 992px) {';

        echo '#' . $this->id . ' .header-mobile {';
        echo 'display: none;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop {';
        echo 'display: block;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-row {';
        echo 'display: flex;';
        echo 'flex-wrap: wrap;';
        echo 'justify-content: space-between;';
        echo 'align-items: center;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-logo {';
        echo 'flex: 0 1 auto;';
        echo 'padding-top: .5rem;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-logo img {';
        if ($this->config->logoImageMaxWidth) {
            echo 'max-width:' . $this->config->logoImageMaxWidth . 'px;';
        }
        if ($this->config->logoImageMaxHeight) {
            echo 'max-height:' . min($this->config->logoImageMaxHeight, 40) . 'px;';
        }
        echo '}';

        // ------------------------------------------------------------------------------------------------------------- 菜单
        echo '#' . $this->id . ' .header-desktop-menu {';
        echo 'flex: 1 1 auto;';
        echo 'padding-left: 5rem;';
        echo 'position: relative;';
        echo 'z-index: 100;';
        echo 'font-weight: 700;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv1 {';
        echo 'margin: 0;';
        echo 'padding: 0;';
        echo 'text-align: right;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv1-item,';
        echo '#' . $this->id . ' .header-desktop-menu-lv1-item-with-dropdown {';
        echo 'list-style: none;';
        echo 'display: inline-block;';
        echo 'padding: 0;';
        echo 'margin: 0 3rem 0 0;';
        echo 'position: relative;';
        echo 'height: 3rem;';
        echo 'line-height: 3rem;';
        echo 'text-align: left;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv1-item-active > .header-desktop-menu-lv1-item-link {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv1-item-link {';
        echo 'color: ' . $configTheme->fontColor . ';';
        echo 'transition: all 0.3s ease;';
        echo 'display: inline-block;';
        echo 'height: 1.75rem;';
        echo 'line-height: 1.75rem;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv1-item-link:hover {';
        echo 'color: var(--major-color);';
        echo 'text-decoration: none;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv1-item-with-dropdown:after {';
        echo 'display: inline-block;';
        echo 'margin-left: .35em;';
        echo 'vertical-align: middle;';
        echo 'content: "";';
        echo 'border-top: .3em solid #999;';
        echo 'border-left: .3em solid transparent;';
        echo 'border-right: .3em solid transparent;';
        echo 'border-bottom: 0;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv2 {';
        echo 'margin: 0;';
        echo 'padding: 0;';
        echo 'position: absolute;';
        echo 'left: -.5rem;';
        echo 'background-color: #FFFFFF;';
        echo 'min-width: 170px;';
        echo 'border-top: 2px solid var(--major-color);';
        echo 'box-shadow: 0 0.5rem 1.875rem rgb(0 0 0 / 15%);';
        echo 'z-index: 120;';
        echo 'transition: all 0.2s linear;';
        echo 'transform: translateY(30px);';
        echo 'visibility: hidden;';
        echo 'opacity:0.1;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv1-item-with-dropdown:hover .header-desktop-menu-lv2 {';
        echo 'visibility: visible;';
        echo 'opacity:1;';
        echo 'transform: translateY(-1px)';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv2-item {';
        echo 'list-style: none;';
        echo 'padding: 0 2rem;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv2-item-active > .header-desktop-menu-lv2-item-link {';
        echo 'color: var(--major-color);';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv2-item:hover {';
        echo 'background-color: #fafafa;';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv2-item-link {';
        echo 'transition: all 0.3s ease;';
        echo 'height: 1.75rem;';
        echo 'line-height: 1.75rem;';
        echo 'color: ' . $configTheme->fontColor . ';';
        echo '}';

        echo '#' . $this->id . ' .header-desktop-menu-lv2-item-link:hover {';
        echo 'color: var(--major-color);';
        echo 'text-decoration: none;';
        echo '}';
        // ------------------------------------------------------------------------------------------------------------- 菜单

        echo '}';
        // ============================================================================================================= 电脑端
        echo '</style>';
    }


    public function display()
    {
        $wwwUrl = \Be\Be::getProperty('Theme.Cafe')->getWwwUrl();

        $this->css();
        ?>
        <div class="header">
            <div class="header-mobile">
                <div class="be-container be-py-50">

                    <div class="header-mobile-row">
                        <div class="header-mobile-left-toolbars">
                            <div class="header-mobile-left-toolbar">
                                <a href="javascript:void(0);" onclick="return DrawerMenu.toggle();">
                                    <i class="header-icon header-icon-menu"></i>
                                </a>
                            </div>
                        </div>

                        <div class="header-mobile-logo">
                            <a href="<?php echo beUrl(); ?>">
                                <?php
                                if ($this->config->logoImage === '') {
                                    ?>
                                    <img src="<?php echo $wwwUrl; ?>/images/logo.png">
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?php echo $this->config->logoImage; ?>">
                                    <?php
                                }
                                ?>
                            </a>
                        </div>

                        <div class="header-mobile-right-toolbars">
                            <div class="header-mobile-right-toolbar">
                                <a href="javascript:void(0);" onclick="return DrawerMenu.toggle();">
                                    <i class="header-icon header-icon-user"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header-desktop">

                <div class="be-container be-py-50">
                    <div class="header-desktop-row">
                        <div class="header-desktop-logo">
                            <a href="<?php echo beUrl(); ?>">
                                <?php
                                if ($this->config->logoImage === '') {
                                    ?>
                                    <img src="<?php echo $wwwUrl; ?>/images/logo.png">
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?php echo $this->config->logoImage; ?>">
                                    <?php
                                }
                                ?>
                            </a>
                        </div>
                        <div class="header-desktop-menu">
                            <ul class="header-desktop-menu-lv1">
                                <?php
                                $menu = \Be\Be::getMenu('North');
                                $menuTree = $menu->getTree();
                                $menuActiveId = $menu->getActiveId();
                                foreach ($menuTree as $item) {
                                    $hasSubItem = false;
                                    if (isset($item->subItems) && is_array($item->subItems) && count($item->subItems) > 0) {
                                        $hasSubItem = true;
                                    }

                                    $active = false;
                                    if ($hasSubItem) {
                                        foreach ($item->subItems as &$subItem) {
                                            if ($item->id === $menuActiveId) {
                                                $subItem->active = true;
                                                $active = true;
                                                break;
                                            }
                                        }
                                        unset($subItem);
                                    } else {
                                        if ($item->id === $menuActiveId) {
                                            $active = true;
                                        }
                                    }

                                    echo '<li class="header-desktop-menu-lv1-item';

                                    if ($hasSubItem) {
                                        echo '-with-dropdown';
                                    }

                                    if ($active) {
                                        echo ' header-desktop-menu-lv1-item-active';
                                    }
                                    echo '">';

                                    $url = 'javascript:void(0);';
                                    if ($item->route) {
                                        if ($item->params) {
                                            $url = beUrl($item->route, $item->params);
                                        } else {
                                            $url = beUrl($item->route);
                                        }
                                    } else {
                                        if ($item->url) {
                                            $url = $item->url;
                                        }
                                    }
                                    echo '<a class="header-desktop-menu-lv1-item-link" href="' . $url . '"';
                                    if ($item->target === '_blank') {
                                        echo ' target="_blank"';
                                    }
                                    echo '>' . $item->label . '</a>';

                                    if ($hasSubItem) {
                                        echo '<ul class="header-desktop-menu-lv2">';
                                        foreach ($item->subItems as $subItem) {

                                            echo '<li class="header-desktop-menu-lv2-item';
                                            if (isset($subItem->active) && $subItem->active) {
                                                echo ' header-desktop-menu-lv2-item-active';
                                            }
                                            echo '">';

                                            $url = 'javascript:void(0);';
                                            if ($subItem->route) {
                                                if ($subItem->params) {
                                                    $url = beUrl($subItem->route, $subItem->params);
                                                } else {
                                                    $url = beUrl($subItem->route);
                                                }
                                            } else {
                                                if ($subItem->url) {
                                                    $url = $subItem->url;
                                                }
                                            }

                                            echo '<a class="header-desktop-menu-lv2-item-link" href="' . $url . '"';
                                            if ($subItem->target === '_blank') {
                                                echo ' target="_blank"';
                                            }
                                            echo '>' . $subItem->label . '</a>';

                                            echo '</li>';
                                        }
                                        echo '</ul>';
                                    }
                                    echo '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php
    }

}

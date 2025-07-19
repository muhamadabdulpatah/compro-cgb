<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        // Dashboard
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Dashboard',
            'url'     => '',
            'route'   => 'voyager.dashboard',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-boat',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }

        // About Us
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'About Us',
            'url'     => '/admin/about',
            'route'   => null,
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-company',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 2,
            ])->save();
        }

        // Contacts
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Contacts',
            'url'     => '',
            'route'   => 'voyager.contacts.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-telephone',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 3,
            ])->save();
        }

        // Services
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Services',
            'url'     => '',
            'route'   => 'voyager.services.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-categories',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 4,
            ])->save();
        }

        // Projects
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Projects',
            'url'     => '',
            'route'   => 'voyager.projects.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-hammer',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 5,
            ])->save();
        }

        // Media
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Media',
            'url'     => '',
            'route'   => 'voyager.media.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-images',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 6,
            ])->save();
        }

        // Administrator
        $adminMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Administrator',
            'url'     => '',
            'route'   => null,
        ]);
        if (!$adminMenuItem->exists) {
            $adminMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-group',
                'color'      => '#000000',
                'parent_id'  => null,
                'order'      => 8,
            ])->save();
        }

        // Users (under Administrator)
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Users',
            'url'     => '',
            'route'   => 'voyager.users.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-person',
                'color'      => null,
                'parent_id'  => $adminMenuItem->id,
                'order'      => 1,
            ])->save();
        }

        // Roles (under Administrator)
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Roles',
            'url'     => '',
            'route'   => 'voyager.roles.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-lock',
                'color'      => null,
                'parent_id'  => $adminMenuItem->id,
                'order'      => 2,
            ])->save();
        }

        // Settings (under Administrator)
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Settings',
            'url'     => '',
            'route'   => 'voyager.settings.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-settings',
                'color'      => null,
                'parent_id'  => $adminMenuItem->id,
                'order'      => 3,
            ])->save();
        }

        // Tools (parent)
        $toolsMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Tools',
            'url'     => '',
            'route'   => null,
        ]);
        if (!$toolsMenuItem->exists) {
            $toolsMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-tools',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 9,
            ])->save();
        }

        // Menu Builder (child of Tools)
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Menu Builder',
            'url'     => '',
            'route'   => 'voyager.menus.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-list',
                'color'      => null,
                'parent_id'  => $toolsMenuItem->id,
                'order'      => 1,
            ])->save();
        }

        // Database (child of Tools)
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Database',
            'url'     => '',
            'route'   => 'voyager.database.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-data',
                'color'      => null,
                'parent_id'  => $toolsMenuItem->id,
                'order'      => 2,
            ])->save();
        }

        // Compass (child of Tools)
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Compass',
            'url'     => '',
            'route'   => 'voyager.compass.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-compass',
                'color'      => null,
                'parent_id'  => $toolsMenuItem->id,
                'order'      => 3,
            ])->save();
        }

        // BREAD (child of Tools)
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'BREAD',
            'url'     => '',
            'route'   => 'voyager.bread.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-bread',
                'color'      => null,
                'parent_id'  => $toolsMenuItem->id,
                'order'      => 4,
            ])->save();
        }

        // Database Backups (child of Tools)
    }
}
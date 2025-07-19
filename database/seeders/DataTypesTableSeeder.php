<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    public function run()
    {
        $dataTypes = [
            ['slug' => 'users', 'name' => 'users', 'display_name_singular' => 'User', 'display_name_plural' => 'Users', 'icon' => 'voyager-person', 'model_name' => 'TCG\\Voyager\\Models\\User', 'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy', 'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', 'description' => '', 'generate_permissions' => 1, 'server_side' => 0, 'details' => null],
            ['slug' => 'menus', 'name' => 'menus', 'display_name_singular' => 'Menu', 'display_name_plural' => 'Menus', 'icon' => 'voyager-list', 'model_name' => 'TCG\\Voyager\\Models\\Menu', 'policy_name' => null, 'controller' => '', 'description' => '', 'generate_permissions' => 1, 'server_side' => 0, 'details' => null],
            ['slug' => 'roles', 'name' => 'roles', 'display_name_singular' => 'Role', 'display_name_plural' => 'Roles', 'icon' => 'voyager-lock', 'model_name' => 'TCG\\Voyager\\Models\\Role', 'policy_name' => null, 'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', 'description' => '', 'generate_permissions' => 1, 'server_side' => 0, 'details' => null],
            ['slug' => 'about', 'name' => 'abouts', 'display_name_singular' => 'About Us', 'display_name_plural' => 'About Us', 'icon' => 'voyager-company', 'model_name' => 'App\\About', 'policy_name' => null, 'controller' => null, 'description' => null, 'generate_permissions' => 1, 'server_side' => 0, 'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}'],
            ['slug' => 'services', 'name' => 'services', 'display_name_singular' => 'Service', 'display_name_plural' => 'Services', 'icon' => 'voyager-categories', 'model_name' => 'App\\Service', 'policy_name' => null, 'controller' => null, 'description' => null, 'generate_permissions' => 1, 'server_side' => 0, 'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}'],
            ['slug' => 'projects', 'name' => 'projects', 'display_name_singular' => 'Project', 'display_name_plural' => 'Projects', 'icon' => 'voyager-hammer', 'model_name' => 'App\\Project', 'policy_name' => null, 'controller' => null, 'description' => null, 'generate_permissions' => 1, 'server_side' => 0, 'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}'],
            ['slug' => 'contacts', 'name' => 'contacts', 'display_name_singular' => 'Contact', 'display_name_plural' => 'Contacts', 'icon' => 'voyager-telephone', 'model_name' => 'App\\Contact', 'policy_name' => null, 'controller' => null, 'description' => null, 'generate_permissions' => 1, 'server_side' => 0, 'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}'],
        ];

        foreach ($dataTypes as $type) {
            $dataType = DataType::firstOrNew(['slug' => $type['slug']]);

            if (!$dataType->exists) {
                $dataType->fill($type)->save();
            }
        }
    }
}
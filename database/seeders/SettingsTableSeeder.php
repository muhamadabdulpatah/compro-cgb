<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    public function run()
    {
        $this->createSetting('site.title', 'Site Title', 'ADMIN PANEL', 'text', 1, 'Site');
        $this->createSetting('site.description', 'Site Description', 'Site Description', 'text', 2, 'Site');
        $this->createSetting('site.logo', 'Site Logo', 'settings/July2025/ImdqeWMtC2kgVRAay4cC.png', 'image', 3, 'Site');
        $this->createSetting('site.company_name', 'Company Name', 'PT Cahaya Guntur Berlian', 'text', 4, 'Site');
        $this->createSetting('site.phone_number', 'Phone Number', '021', 'text', 5, 'Site');
        $this->createSetting('site.company_address', 'Company Address', 'Rejosari No. 448 Talang Ubi, Pendopo, Kab. PALI, Sumatera Selatan (31214)', 'text_area', 6, 'Site');
        $this->createSetting('site.company_maps', 'Company Maps', 'https://www.google.com/maps/embed?...', 'text_area', 7, 'Site');
        $this->createSetting('site.hero_image', 'Hero Image', 'settings/July2025/eB8YTGxb0xyOz0uYq5xn.jpg', 'image', 8, 'Site');
        $this->createSetting('site.hero_title', 'Hero Title', 'PT. Cahaya Guntur Berlian', 'text', 9, 'Site');
        $this->createSetting('site.hero_tagline', 'Hero Tagline', 'Memberi Tenaga untuk Mewujudkan Karya Besar', 'text', 10, 'Site');
        $this->createSetting('site.hero_description', 'Hero Description', 'Dari proyek konstruksi hingga layanan pendukung, PT. Cahaya Guntur Berlian siap mendampingi Anda dengan solusi terpercaya dan tenaga ahli terbaik.', 'text_area', 11, 'Site');
        $this->createSetting('site.about_us', 'About Us', '<div><p><strong>PT. CAHAYA GUNTUR BERLIAN</strong> adalah company...</p></div>', 'rich_text_box', 12, 'Site');
        $this->createSetting('site.visi', 'Visi', '<p>PT. CAHAYA GUNTUR BERLIAN memiliki komitmen untuk...</p>', 'rich_text_box', 13, 'Site');
        $this->createSetting('site.misi', 'Misi', '<p>PT. CAHAYA GUNTUR BERLIAN terus berupaya untuk menjadi mitra terpercaya...</p>', 'rich_text_box', 14, 'Site');
        $this->createSetting('site.email', 'Email', 'admin@cgb.id', 'text', 15, 'Site');

        // Admin Panel Defaults
        $this->createSetting('admin.bg_image', 'Admin Background Image', '', 'image', 1, 'Admin');
        $this->createSetting('admin.title', 'Admin Title', 'Voyager', 'text', 2, 'Admin');
        $this->createSetting('admin.description', 'Admin Description', 'Admin Panel Description', 'text', 3, 'Admin');
        $this->createSetting('admin.loader', 'Admin Loader', '', 'image', 4, 'Admin');
        $this->createSetting('admin.icon_image', 'Admin Icon Image', '', 'image', 5, 'Admin');
        $this->createSetting('admin.google_analytics_client_id', 'Google Analytics Client ID', '', 'text', 6, 'Admin');
    }

    protected function createSetting($key, $display_name, $value, $type, $order, $group)
    {
        $setting = $this->findSetting($key);
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => $display_name,
                'value'        => $value,
                'details'      => '',
                'type'         => $type,
                'order'        => $order,
                'group'        => $group,
            ])->save();
        }
    }

    protected function findSetting($key)
    {
        return Setting::firstOrNew(['key' => $key]);
    }
}
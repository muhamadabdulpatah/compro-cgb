<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;

class DataRowsTableSeeder extends Seeder
{
    public function run(): void
    {
        $dataRows = [
            [1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, null, 1],
            [2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, null, 2],
            [3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, null, 3],
            [4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, null, 4],
            [5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, null, 5],
            [6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, null, 6],
            [7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, null, 7],
            [8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, null, 8],
            [9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":0}', 10],
            [10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}', 11],
            [11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, null, 12],
            [12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, null, 1],
            [13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, null, 2],
            [14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, null, 3],
            [15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, null, 4],
            [16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, null, 1],
            [17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, null, 2],
            [18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, null, 3],
            [19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, null, 4],
            [20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, null, 5],
            [21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, null, 9],
            [29, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1],
            [30, 7, 'judul', 'text', 'Judul', 0, 1, 1, 1, 1, 1, '{}', 2],
            [31, 7, 'deskripsi', 'text_area', 'Deskripsi', 0, 1, 1, 1, 1, 1, '{}', 3],
            [32, 7, 'visi', 'text_area', 'Visi', 0, 1, 1, 1, 1, 1, '{}', 4],
            [33, 7, 'misi', 'text_area', 'Misi', 0, 1, 1, 1, 1, 1, '{}', 5],
            [34, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6],
            [35, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7],
            [36, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1],
            [37, 8, 'nama', 'text', 'Nama', 0, 1, 1, 1, 1, 1, '{}', 2],
            [38, 8, 'deskripsi', 'text', 'Deskripsi', 0, 1, 1, 1, 1, 1, '{}', 3],
            [39, 8, 'ikon', 'image', 'Ikon', 0, 1, 1, 1, 1, 1, '{}', 4],
            [40, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 5],
            [41, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6],
            [42, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1],
            [43, 9, 'judul', 'text', 'Judul', 0, 1, 1, 1, 1, 1, '{}', 2],
            [44, 9, 'deskripsi', 'text', 'Deskripsi', 0, 1, 1, 1, 1, 1, '{}', 3],
            [47, 9, 'gambar', 'image', 'Gambar', 0, 1, 1, 1, 1, 1, '{}', 6],
            [48, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 7],
            [49, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8],
            [50, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1],
            [51, 10, 'alamat', 'text', 'Alamat', 0, 1, 1, 1, 1, 1, '{}', 2],
            [52, 10, 'no_telepon', 'text', 'No Telepon', 0, 1, 1, 1, 1, 1, '{}', 3],
            [53, 10, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 4],
            [54, 10, 'maps_embed', 'text', 'Maps Embed', 0, 1, 1, 1, 1, 1, '{}', 5],
            [55, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6],
            [56, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7],
        ];

        foreach ($dataRows as $row) {
            DataRow::firstOrCreate([
                'data_type_id' => $row[1],
                'field' => $row[2],
            ], [
                'type' => $row[3],
                'display_name' => $row[4],
                'required' => $row[5],
                'browse' => $row[6],
                'read' => $row[7],
                'edit' => $row[8],
                'add' => $row[9],
                'delete' => $row[10],
                'details' => $row[11],
                'order' => $row[12],
            ]);
        }
    }
}
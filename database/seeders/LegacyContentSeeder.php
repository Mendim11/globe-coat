<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LegacyContentSeeder extends Seeder
{
    public function run(): void
    {
        $data = require __DIR__.'/legacy_data.php';

        DB::statement('PRAGMA foreign_keys = OFF');

        DB::table('blog_category')->delete();
        DB::table('blogs')->delete();
        DB::table('news')->delete();
        DB::table('products')->delete();
        DB::table('pages')->delete();
        DB::table('navbars')->delete();
        DB::table('team_members')->delete();
        DB::table('product_categories')->delete();
        DB::table('categories')->delete();

        foreach ([
            'categories',
            'product_categories',
            'blogs',
            'blog_category',
            'news',
            'products',
            'team_members',
            'navbars',
            'pages',
        ] as $table) {
            foreach ($data[$table] ?? [] as $row) {
                foreach ($row as $key => $value) {
                    if (is_string($value)) {
                        $value = trim($value);
                    }

                    if ($value === 'NULL' || $value === null || $value === '') {
                        $row[$key] = null;
                        continue;
                    }

                    $row[$key] = $value;
                }

                if (array_key_exists('project_images', $row) && is_string($row['project_images'])) {
                    $decoded = json_decode(stripslashes($row['project_images']), true);
                    $row['project_images'] = json_encode($decoded ?? []);
                }

                if (array_key_exists('product_images', $row) && is_string($row['product_images'])) {
                    $decoded = json_decode(stripslashes($row['product_images']), true);
                    $row['product_images'] = json_encode($decoded ?? []);
                }

                if (array_key_exists('additional_information', $row)) {
                    $value = $row['additional_information'];
                    if ($value === null || $value === 'null') {
                        $row['additional_information'] = null;
                    } elseif (is_string($value)) {
                        $decoded = json_decode($value, true);
                        $row['additional_information'] = json_encode($decoded);
                    }
                }

                // Escape cleanup for SQLite text that still has SQL-style escapes.
                foreach (['title', 'slug', 'content', 'description', 'author', 'name', 'label', 'url'] as $textField) {
                    if (isset($row[$textField]) && is_string($row[$textField])) {
                        $row[$textField] = stripcslashes($row[$textField]);
                    }
                }

                DB::table($table)->insert($row);
            }
        }

        DB::statement('PRAGMA foreign_keys = ON');
    }
}

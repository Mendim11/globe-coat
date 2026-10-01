<?php

namespace Database\Seeders;

use App\Models\Finish;
use App\Models\GalleryImage;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => 'admin@globecoat.ae'],
            [
                'name' => 'Globe Coat Admin',
                'password' => 'password',
                'email_verified_at' => now(),
            ],
        );

        User::query()->updateOrCreate(
            ['email' => 'ideal@gmail.com'],
            [
                'name' => 'Admin',
                'password' => 'password',
                'email_verified_at' => now(),
            ],
        );

        SiteSetting::query()->updateOrCreate(['id' => 1], SiteSetting::defaults());

        $finishes = [
            [
                'name' => 'Rammed Earth',
                'slug' => 'rammed-earth',
                'excerpt' => 'Organic, layered and tactile. A contemporary interpretation of the natural earth wall, bringing depth and character to architectural spaces.',
                'body' => 'Organic, layered and tactile. A contemporary interpretation of the natural earth wall, bringing depth and character to architectural spaces.',
                'image' => 'images/rammed-earth.webp',
                'button_label' => 'Explore Rammed Earth',
                'layout' => 'image-left',
                'sort_order' => 1,
                'specs' => [
                    ['label' => 'Character', 'value' => 'Organic, layered, tactile'],
                    ['label' => 'Inspiration', 'value' => 'Natural earth wall'],
                    ['label' => 'Application', 'value' => 'Architectural interiors'],
                ],
            ],
            [
                'name' => 'Natural Clay',
                'slug' => 'natural-clay',
                'excerpt' => 'Raw and warm crafted with natural clay, these finishes bring an authentic connection to earth, creating surfaces with subtle variation, softness and depth.',
                'body' => 'Raw and warm crafted with natural clay, these finishes bring an authentic connection to earth, creating surfaces with subtle variation, softness and depth.',
                'image' => 'images/gallery-bands.webp',
                'button_label' => 'Explore Natural Clay',
                'layout' => 'image-right',
                'sort_order' => 2,
                'specs' => [
                    ['label' => 'Composition', 'value' => 'Natural clay'],
                    ['label' => 'Aesthetic', 'value' => 'Subtle variation, softness, depth'],
                    ['label' => 'Feel', 'value' => 'Raw and warm'],
                ],
            ],
            [
                'name' => 'Polished Plaster',
                'slug' => 'polished-plaster',
                'excerpt' => 'Smooth, refined and naturally dimensional. Its subtle movement and depth respond beautifully to changing light.',
                'body' => 'Smooth, refined and naturally dimensional. Its subtle movement and depth respond beautifully to changing light.',
                'image' => 'images/polished-plaster.webp',
                'button_label' => 'Explore Polished Plaster',
                'layout' => 'image-left',
                'sort_order' => 3,
                'specs' => [
                    ['label' => 'Finish', 'value' => 'Smooth and refined'],
                    ['label' => 'Depth', 'value' => 'Naturally dimensional'],
                    ['label' => 'Light', 'value' => 'Responds to changing light'],
                ],
            ],
            [
                'name' => 'Textured Finishes',
                'slug' => 'textured-finishes',
                'excerpt' => 'Surfaces designed to create depth, shadow and tactile interest, adding a stronger material expression to walls.',
                'body' => 'Surfaces designed to create depth, shadow and tactile interest, adding a stronger material expression to walls.',
                'image' => 'images/gallery-terracotta.webp',
                'button_label' => 'Explore Textured Finishes',
                'layout' => 'image-right',
                'sort_order' => 4,
                'specs' => [
                    ['label' => 'Effect', 'value' => 'Depth and shadow'],
                    ['label' => 'Feel', 'value' => 'Tactile interest'],
                    ['label' => 'Expression', 'value' => 'Stronger material presence'],
                ],
            ],
            [
                'name' => 'Smooth Mineral Finishes',
                'slug' => 'smooth-mineral-finishes',
                'excerpt' => 'Quiet and sophisticated surfaces inspired by natural stone, earth and mineral tones.',
                'body' => 'Quiet and sophisticated surfaces inspired by natural stone, earth and mineral tones.',
                'image' => null,
                'button_label' => 'Explore Smooth Mineral Finishes',
                'layout' => 'banner',
                'sort_order' => 5,
                'specs' => [
                    ['label' => 'Aesthetic', 'value' => 'Quiet and sophisticated'],
                    ['label' => 'Inspiration', 'value' => 'Natural stone, earth, minerals'],
                    ['label' => 'Tone', 'value' => 'Mineral-inspired'],
                ],
            ],
        ];

        Finish::query()->whereNotIn('slug', collect($finishes)->pluck('slug'))->update(['is_published' => false]);

        foreach ($finishes as $finish) {
            Finish::query()->updateOrCreate(
                ['slug' => $finish['slug']],
                $finish + ['is_published' => true],
            );
        }

        $gallery = [
            ['image' => 'images/gallery-terracotta.webp', 'alt' => 'Terracotta textured cylinder', 'row' => 1, 'sort_order' => 1],
            ['image' => 'images/gallery-bands.webp', 'alt' => 'Layered beige wall finish', 'row' => 1, 'sort_order' => 2],
            ['image' => 'images/gallery-sofa.webp', 'alt' => 'Interior with textured plaster wall', 'row' => 1, 'sort_order' => 3],
            ['image' => 'images/gallery-texture.webp', 'alt' => 'Close view of a mineral finish', 'row' => 1, 'sort_order' => 4],
            ['image' => 'images/gallery-texture.webp', 'alt' => 'Mineral finish beside a side table', 'row' => 2, 'sort_order' => 1],
            ['image' => 'images/gallery-sofa.webp', 'alt' => 'Seating against a lime plaster wall', 'row' => 2, 'sort_order' => 2],
            ['image' => 'images/gallery-bands.webp', 'alt' => 'Horizontal bands of natural plaster', 'row' => 2, 'sort_order' => 3],
            ['image' => 'images/gallery-terracotta.webp', 'alt' => 'Warm terracotta surface', 'row' => 2, 'sort_order' => 4],
        ];

        GalleryImage::query()->delete();
        foreach ($gallery as $image) {
            GalleryImage::query()->create($image);
        }

        $services = [
            ['name' => 'Decorative Finishes', 'url' => '/presentation', 'sort_order' => 1],
            ['name' => 'Wall Cladding', 'url' => '/shop', 'sort_order' => 2],
            ['name' => 'Polished Plaster', 'url' => '/finishes/polished-plaster', 'sort_order' => 3],
            ['name' => 'Rammed Earth', 'url' => '/finishes/rammed-earth', 'sort_order' => 4],
            ['name' => 'Interior & Exterior Design', 'url' => '/sample-request', 'sort_order' => 5],
        ];

        Service::query()->delete();
        foreach ($services as $service) {
            Service::query()->create($service);
        }

        $this->call(LegacyContentSeeder::class);
    }
}

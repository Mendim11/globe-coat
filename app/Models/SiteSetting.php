<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $guarded = [];

    public static function current(): self
    {
        return static::query()->first() ?? new static(static::defaults());
    }

    /**
     * @return array<string, string>
     */
    public static function defaults(): array
    {
        return [
            'phone' => '+971 4 2858603, 2855889',
            'phone_label' => 'Call Us Now!',
            'email' => 'info@globecoat.ae',
            'email_label' => 'Talk to us',
            'hero_title' => 'EARTH',
            'hero_subtitle' => 'Welcome to EARTH — a curated collection of decorative finishes inspired by the raw beauty of natural materials, with natural clay, earth and mineral surfaces at its core.',
            'hero_image' => 'images/hero.webp',
            'atmosphere_title' => 'Explore the Finishes',
            'atmosphere_body' => "From the organic character of Rammed Earth and the tactile warmth of Clay finishes to the refined depth of Lime Plaster, each finish explores a different relationship between texture, light, colour and surface.\n\nThe collection brings together a selection of clay-based, smooth, textured and tactile finishes in earthy, mineral-inspired tones, created to give architects and interior designers a starting point for material exploration.\n\nEach sample in the collection has been carefully selected to demonstrate how natural materials, colour, texture and application can transform a surface. Explore the finishes below to discover their characteristics, applications and visual possibilities.",
            'gallery_title' => 'Texture & Form',
            'cta_title' => 'Designed for spaces. Inspired by nature.',
            'cta_body' => 'Experience the tactile quality of our finishes firsthand. Request a custom sample set curated for your design vision.',
            'cta_button_label' => 'Request Sample Set',
            'footer_kicker' => "Let's talk",
            'footer_heading' => 'Catch us here easily',
            'footer_intro' => 'Globe Coat is a Dubai studio of high-end decorative finishes. Share your project and we will help you choose a surface with the right texture, colour, and performance.',
            'chat_label' => 'Chat Now.',
            'address' => 'Al Zubaidi Modern Decorative Systems LLC, Apricot Tower, Office 407 & 408, Dubai Silicon Oasis, PO Box 60196, Dubai, UAE',
            'together_heading' => 'Want to create Something Together?',
            'together_link_label' => 'Get in touch',
            'facebook_url' => 'https://facebook.com',
            'instagram_url' => 'https://instagram.com',
            'x_url' => 'https://x.com',
            'youtube_url' => 'https://youtube.com',
        ];
    }
}

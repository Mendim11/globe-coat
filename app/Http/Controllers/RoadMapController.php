<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RoadMapController extends Controller
{
    public function index()
    {
        $intro = '
<p>
It started in 1979 when Mr. Abdelbari Al Zubaidi, the founder of AL Zubaidi establishment, began trading various products including quality paints from the UK and France. By 1995, he identified the need for a focused company offering high-quality decorative paints and plaster with skilled applicators — marking the beginning of <strong>Globecoat ™</strong>.
</p>

<p>
Since then, <strong>Globecoat ™</strong> has become a trusted name in high-end interior finishes, recognized for delivering exceptional and dependable service, with branches across the Middle East and India.
</p>

<p>
Today, the company continues to grow under second-generation leadership — Khalid & Ahmed — who uphold its founding values while driving innovation, expansion, and excellence.
</p>

<p><strong>We offer the following products:</strong></p>

<ul>
    <li>Decorative paints, plasters, and clay</li>
    <li>Gilding (genuine and imitation leaves)</li>
    <li>Seamless decorative and industrial flooring</li>
    <li>Sculptured & handmade panels</li>
    <li>Stone veneer & natural panels</li>
    <li>Hygienic FRP and sandwich panels with drainage systems</li>
    <li>Acoustic solutions</li>
</ul>
';

        $items = [
            ['year' => '1995', 'title' => 'It all started in 1995', 'description' => 'The foundation of our company, marking the beginning of a journey driven by quality and innovation.', 'location' => 'UAE'],
            ['year' => '1997', 'title' => 'Our First Mega Project', 'description' => 'Completed the Qasr Al Mirage in Dubai, setting a benchmark for high-quality delivery and customer satisfaction.', 'location' => 'UAE'],
            ['year' => '1999', 'title' => 'Exclusive Partnership with Anhydrolux', 'description' => 'Secured exclusive rights to Armourcoat finishes in the region, reinforcing our commitment to premium materials and expert craftsmanship.', 'location' => 'U.K.'],
            ['year' => '2000', 'title' => 'Emirates Towers, Dubai', 'description' => null, 'location' => 'UAE'],
            ['year' => '2002', 'title' => 'JBR Residences, Dubai', 'description' => 'Applied 70,000 m² of Armourcoat finishes, showcasing our capacity to deliver premium finishes at scale.', 'location' => 'UAE'],
            ['year' => '2008', 'title' => 'Expanding into Saudi Arabia', 'description' => 'Established our regional head office in the Kingdom of Saudi Arabia with branches in Jeddah and Riyadh, offering full coverage across the Kingdom.', 'location' => 'KSA'],
            ['year' => '2009', 'title' => 'Dubai International Airport', 'description' => 'Completed key finishes in this world-renowned travel hub.', 'location' => 'UAE'],
            ['year' => '2010', 'title' => 'Burj Khalifa, Dubai', 'description' => 'Our craftsmanship is present on every floor of the world’s tallest building.', 'location' => 'UAE'],
            ['year' => '2011', 'title' => 'SME Award Recipient', 'description' => 'Received the 2011 SME 100 Award in Dubai for excellence and commitment to quality.', 'location' => 'UAE'],
            ['year' => '2012', 'title' => 'Nation Towers, Abu Dhabi', 'description' => null, 'location' => 'UAE'],
            ['year' => '2014–2017', 'title' => 'Jabal Omar Development, Makkah', 'description' => 'Worked on major hospitality landmarks: Conrad, Marriott Hotel, and Hilton Convention Center.', 'location' => 'KSA'],
            ['year' => '2015', 'title' => 'KAPSARC by Zaha Hadid – Riyadh', 'description' => 'Delivered finishes for this prestigious project by the world-renowned architect.', 'location' => 'KSA'],
            ['year' => '2015', 'title' => 'Introduction of Hygienic Wall Solutions', 'description' => 'Diversified our offerings with specialized hygienic wall systems for health-sensitive environments.', 'location' => ''],
            ['year' => '2016', 'title' => 'New Showroom Opening in Dubai', 'description' => 'Opened a new showroom, enhancing customer engagement and service.', 'location' => 'UAE'],
            ['year' => '2017', 'title' => 'Qasr Al Watan, Abu Dhabi', 'description' => 'Completed all decorative finishes for this grand presidential palace.', 'location' => 'UAE'],
            ['year' => '2018', 'title' => 'New Headquarters at Dubai Silicon Oasis', 'description' => 'Moved into a modern, purpose-built facility to support our growing operations.', 'location' => 'UAE'],
            ['year' => '2020', 'title' => 'Expo 2020 Pavilions, Dubai', 'description' => 'One of the few approved contractors to complete work on 6 national pavilions.', 'location' => 'UAE'],
            ['year' => '2021', 'title' => 'The Royal Atlantis, Palm Jumeirah', 'description' => 'Delivered premium decorative finishes for this landmark of luxury living.', 'location' => 'UAE'],
            ['year' => '2022', 'title' => 'New Branch in Cairo, Egypt', 'description' => 'Expanded our footprint into North Africa, strengthening our MENA presence.', 'location' => 'Egypt'],
            ['year' => '2022', 'title' => 'Riyadh Metro', 'description' => 'Participated in one of the region’s most ambitious infrastructure projects.', 'location' => 'KSA'],
            ['year' => '2023', 'title' => 'Red Sea Resorts, Saudi Arabia', 'description' => 'Successfully completed premium finishes at St. Regis Resort, Ritz-Carlton Resort, GlobeArab Resort, Desert Rock Resort, Four Seasons, and Grand Hyatt.', 'location' => 'KSA'],
            ['year' => '2024 – Present', 'title' => 'Continuing Excellence', 'description' => 'Actively engaged in delivering distinguished projects, setting standards with innovations and premium finishes.', 'location' => 'Regional'],
        ];

        return view('frontend.roadmap', compact('intro', 'items'));
    }
}
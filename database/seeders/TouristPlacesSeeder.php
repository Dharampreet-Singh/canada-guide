<?php

namespace Database\Seeders;

use App\Models\TouristPlaces;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TouristPlacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $places = [
            [
                'images' => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/26/b0/49/3f/go-big-at-canada-s-biggest.jpg",
                'about' => "Whistler, British Columbia, is a short trip from Vancouver by road or air. The stunning landscape, pedestrian-only Village and genuine, down-to-earth mountain culture make Whistler an unforgettable year-round destination. Winters provide reliable snow for skiing, snowboarding and Nordic sports while golf, mountain biking and hiking fill the warmer months. Festivals, spas, restaurants and bars combine with endless outdoor activities to make Whistler the ultimate place to escape and unwind.",
                'location' => "Whistler, British Columbia, Canada",
            ],
            [
                'images' => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/08/63/00/14/lake-minnewanka.jpg",
                'about' => "Soaring mountains, jewel-coloured lakes and pristine wilderness await you in Canada’s first National Park. The irresistible beauty of the landscape invites travellers to immerse themselves in the outdoors all year round — whether hiking through untouched forests and paddling the turquoise lakes in summertime, or skiing the slopes and soaking in the steamy hot springs during the winter. Travellers also enjoy the warm hospitality of Banff or Lake Louise, the region’s charming mountain townships.",
                'location' => "Banff National Park, Alberta, Canada",
            ],
            [
                'images' => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/33/f2/6b/caption.jpg",
                'about' => "Montreal, c’est si bon! This French-speaking city is considered the cultural capital of Canada, and is a cosmopolitan celebration of Québécois style. A stroll around the cobblestone streets and grand buildings of Vieux-Montréal will give you a taste of European flavour. The Basilique Notre-Dame is a confection of stained glass, and the Plateau Mont-Royal district will delight with its quaint boutiques and cafés. Dig in to a massive plate of poutine to fuel up for a tour of the epic Olympic Park.",
                'location' => "Montreal, Quebec, Canada",
            ],
            [
                'images' => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/c0/9d/1e/caption.jpg?w=1400&h=-1&s=1&cx=747&cy=734&chk=v1_2bf6086818781aa85625",
                'about' => "We won't lie: Niagara Falls is uber-touristy. There are wax museums and a Ripley's Believe It or Not Museum, and if it's a fast-food chain, you can probably find it here. But even the most jaded hipster shouldn't pass up a chance to visit this town, because the Falls themselves are spectacular.",
                'location' => "Niagara Falls, Ontario, Canada",
            ]
        ];

        foreach ($places as $key => $value) {
            TouristPlaces::create($value);
        }
    }
}

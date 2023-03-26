<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Housing>
 */
class HousingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'images' => "https://images.rentals.ca/property-pictures/medium/toronto-on/557108/apartment-6638425.jpg",
            'address' => "915 St Clair Avenue West",
            'city'=> "Toronto",
            'state'=> "ON",
            'zip'=> "",
            'uploaded_by_user_id'=> 1,
            'description' => "915 St Clair Avenue West is an apartment for rent in Toronto, ON. It has 1 unit. Units have 0 to 0 bedrooms. Units have 1 bathroom. Water and heating are utilities included in the rent price.",
            'property_type' => "apartment",
            'property_for' => "rent",
            'number_of_beds' => 1,
            'number_of_bathrooms' => 1.5,
            'is_available' => true,
            'price' => 1795,
            'currency' => "$",
            'utilities' => "heating,water",
            'area' => 2000
        ];
    }
}

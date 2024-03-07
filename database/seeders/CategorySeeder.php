<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
                ['name' => 'Retail', 'description' => 'Retail businesses selling goods to consumers.'],
                ['name' => 'Services', 'description' => 'Businesses providing services to consumers.'],
                ['name' => 'Manufacturing', 'description' => 'Businesses producing goods for sale.'],
                ['name' => 'Agriculture', 'description' => 'Businesses involved in farming and agriculture.'],
                ['name' => 'Construction', 'description' => 'Businesses involved in construction projects.'],
                ['name' => 'Education', 'description' => 'Businesses involved in providing educational services.'],
                ['name' => 'Healthcare', 'description' => 'Businesses involved in healthcare services.'],
                ['name' => 'Information Technology', 'description' => 'Businesses involved in technology and software development.'],
                ['name' => 'Finance', 'description' => 'Businesses involved in financial services.'],
                ['name' => 'Real Estate', 'description' => 'Businesses involved in buying, selling, and renting properties.'],
                ['name' => 'Transportation', 'description' => 'Businesses involved in transportation services.'],
                ['name' => 'Food and Beverage', 'description' => 'Businesses involved in the food and beverage industry.'],
                ['name' => 'Entertainment', 'description' => 'Businesses involved in entertainment, such as music, movies, and sports.'],
                ['name' => 'Non-Profit', 'description' => 'Businesses involved in non-profit organizations.'],
                ['name' => 'Government', 'description' => 'Businesses involved in government services.'],
                ['name' => 'E-commerce', 'description' => 'Businesses involved in online retail and sales.'],
                ['name' => 'Telecommunications', 'description' => 'Businesses involved in telecommunications services.'],
                ['name' => 'Utilities', 'description' => 'Businesses involved in providing utilities, such as water, electricity, and gas.'],
                ['name' => 'Environmental Services', 'description' => 'Businesses involved in environmental services and solutions.'],
                ['name' => 'Security', 'description' => 'Businesses involved in security services.'],
                ['name' => 'Logistics', 'description' => 'Businesses involved in logistics and supply chain management.'],
                ['name' => 'Marketing', 'description' => 'Businesses involved in marketing and advertising.'],
                ['name' => 'Hospitality', 'description' => 'Businesses involved in the hospitality industry, such as hotels and restaurants.'],
                ['name' => 'Fashion', 'description' => 'Businesses involved in the fashion industry.'],
                ['name' => 'Sports', 'description' => 'Businesses involved in sports, such as sports teams and equipment.'],
                ['name' => 'Art', 'description' => 'Businesses involved in the art industry.'],
                ['name' => 'Music', 'description' => 'Businesses involved in the music industry.'],
                ['name' => 'Film', 'description' => 'Businesses involved in the film industry.'],
                ['name' => 'Energy', 'description' => 'Businesses involved in energy production and distribution.'],
                ['name' => 'Technology', 'description' => 'Businesses involved in technology research and development.'],
                ['name' => 'Pharmaceuticals', 'description' => 'Businesses involved in the pharmaceutical industry.'],
                ['name' => 'Biotechnology', 'description' => 'Businesses involved in biotechnology research and development.'],
                ['name' => 'Aerospace', 'description' => 'Businesses involved in aerospace technology and services.'],
                ['name' => 'Automotive', 'description' => 'Businesses involved in the automotive industry.'],
                ['name' => 'Chemicals', 'description' => 'Businesses involved in the chemical industry.'],
                ['name' => 'Consulting', 'description' => 'Businesses involved in providing consulting services.'],
                ['name' => 'Insurance', 'description' => 'Businesses involved in providing insurance services.'],
                ['name' => 'Legal', 'description' => 'Businesses involved in providing legal services.'],
                ['name' => 'Media', 'description' => 'Businesses involved in media production and distribution.'],
                ['name' => 'Publishing', 'description' => 'Businesses involved in publishing books, magazines, and other media.'],
                ['name' => 'Software', 'description' => 'Businesses involved in software development and distribution.'],
                ['name' => 'Television', 'description' => 'Businesses involved in television production and distribution.'],
                ['name' => 'Waste Management', 'description' => 'Businesses involved in waste management and recycling.'],
                ['name' => 'Water Utilities', 'description' => 'Businesses involved in providing water utilities.'],
                ['name' => 'Welding', 'description' => 'Businesses involved in welding services.'],
                ['name' => 'Woodworking', 'description' => 'Businesses involved in woodworking and furniture production.'],
                ['name' => 'Yoga', 'description' => 'Businesses involved in yoga instruction and wellness.'],
                ['name' => 'Zoo', 'description' => 'Businesses involved in running zoos and animal care.'],
            ];

        foreach ($data as $row) {
            Category::create($row);
        }
    }
}

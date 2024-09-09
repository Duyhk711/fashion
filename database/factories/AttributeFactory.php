<?php

namespace Database\Factories;

use App\Models\Attribute;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attribute>
 */
class AttributeFactory extends Factory
{
    protected $model = Attribute::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word, // Tên thuộc tính
            'slug' => $this->faker->slug, // Slug ngẫu nhiên
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

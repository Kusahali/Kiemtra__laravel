<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\congty;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class congtyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'TenHang'=>$this->faker->name(),
            'DonViTinh'=>$this->faker->randomElement(['mm','kg','m','g']),
            'SoLuongNhap'=>$this->faker->randomFloat(),
            'GiaNhap'=>$this->faker->randomFloat(),
            'GiaBan'=>$this->faker->randomFloat(),
        ];
    }
}

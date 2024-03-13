<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\quanlybanhang;
use Carbon\Carbon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\quanlybanhang>
 */
class quanlybanhangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'TenDanhMuc'=> $this->faker->name(),
            'DanhMucThietYeu'=> true,
            'hang_id'=> random_int(1,10),
        ];
    }
}

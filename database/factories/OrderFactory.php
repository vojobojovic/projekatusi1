<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->word,
            'product_id' => $this->faker->word,
            'quantity' => $this->faker->numberBetween(-10000, 10000),
            'status' => $this->faker->regexify('[A-Za-z0-9]{50}'),
        ];
    }
}

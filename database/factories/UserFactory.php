<?php
namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => 'example@admin.ge',
            'username' => $this->faker->userName(),
            'email_verified_at' => now(),
            'password' => Hash::make('admin'), // password
            'remember_token' => Hash::make(Str::random(10)),
        ];
    }
}
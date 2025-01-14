<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->name($gender = null | 'male' | 'female'),
            'first_name' => fake()->firstName($gender = null | 'male' | 'female'),
            'last_name' => fake()->lastName(),
            'email' => fake()->email(),
            'password_hash' => static::$password ??= Hash::make('password_hash'),

            // 'first_name' => $user['first_name'],
            // 'last_name' => $user['last_name'],
            // 'email' => $user['email'],
            // 'password_hash' => Hash::make('password123'), 
            // 'create_at' => now(),
            // 'update_at' => now(),
            // from below
            // 'name' => fake()->name(),
            // 'email' => fake()->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            // 'password_hash' => static::$password ??= Hash::make('password_hash'),
            // 'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

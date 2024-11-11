<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Book::factory()->create([
            'title' => 'O Senhor dos Anéis',
            'id_user' => fake()->numberBetween(1, 10),
            'pages' => '576',
            'price' => '48.90'
        ]);

        Book::factory()->create([
            'title' => "Can't Hurt me",
            'id_user' => fake()->numberBetween(1, 10),
            'pages' => '320',
            'price' => '39.45'
        ]);

        Book::factory()->create([
            'title' => "O príncipe",
            'id_user' => fake()->numberBetween(1, 10),
            'pages' => '96',
            'price' => '17.49'
        ]);

        Book::factory()->create([
            'title' => "Titanic",
            'id_user' => fake()->numberBetween(1, 10),
            'pages' => '371',
            'price' => '85.21'
        ]);

        Book::factory()->create([
            'title' => "O poder do hábido",
            'id_user' => fake()->numberBetween(1, 10),
            'pages' => fake()->numberBetween(30, 600),
            'price' => fake()->randomFloat(2, 10, 200),
        ]);

        Book::factory()->create([
            'title' => "A arte da guerra",
            'id_user' => fake()->numberBetween(1, 10),
            'pages' => fake()->numberBetween(30, 600),
            'price' => fake()->randomFloat(2, 10, 200),
        ]);

        Book::factory()->create([
            'title' => "Estrutura de dados",
            'id_user' => fake()->numberBetween(1, 10),
            'pages' => fake()->numberBetween(30, 600),
            'price' => fake()->randomFloat(2, 10, 200),
        ]);

        Book::factory()->create([
            'title' => "Django para os impacientes",
            'id_user' => fake()->numberBetween(1, 10),
            'pages' => fake()->numberBetween(30, 600),
            'price' => fake()->randomFloat(2, 10, 200),
        ]);

        Book::factory()->create([
            'title' => "O homem de giz",
            'id_user' => fake()->numberBetween(1, 10),
            'pages' => fake()->numberBetween(30, 600),
            'price' => fake()->randomFloat(2, 10, 200),
        ]);

        Book::factory()->create([
            'title' => "Como fazer amigos e influenciar pessoas",
            'id_user' => fake()->numberBetween(1, 10),
            'pages' => fake()->numberBetween(30, 600),
            'price' => fake()->randomFloat(2, 10, 200),
        ]);
    }
}

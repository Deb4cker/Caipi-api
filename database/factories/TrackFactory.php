<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Track;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Track>
 */
class TrackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'album_id' => Album::all()->random()->id,
            'title' => $this->faker->randomElement([
                'Chico Mineiro',
                'O Menino da Porteira',
                'Panela Velha',
                'Saudade de Minha Terra',
                'Pagode em Brasília',
                'Cavalo Preto',
                'Coração de Peão',
                'Coração de Boia Fria',
                'As Andorinhas',
                'Meu Pinguim',
                'Moreninha Linda',
                'O Gado do Branco',
                'Corte de Cana',
                'Cavalo de Fogo',
                'Festa do Peão',
                'A Moda do Marreco',
                'Quem Ama Nunca Esquece',
                'Desgarrados do Sertão',
                'Duas Caras',
                'Lamento do Sertanejo',
                'Galopeira'
            ]),
        ];
    }
}

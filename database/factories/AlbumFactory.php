<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement([
                    'Rei do Gado',
                    'Golpe de Mestre',
                    'Navalha na Carne',
                    'Rancho do Vale',
                    'Linha de Frente',
                    'Felicidade',
                    'Terra Roxa',
                    'Românticas',
                    'As 20 Mais',
                    '80 Anos de Vida e Viola',
                    'Sucessos de Ouro',
                    'Warner 30 Anos',
                    'Série Os Gigantes',
                    'Warner 25 Anos',
                    'Dose Dupla (Vol. 5)',
                    'Dose Dupla (Vol. 4)',
                    'Dose Dupla (Vol. 3)',
                    'Som da Terra',
                    'Modas de Viola Classe A',
                    'Pagodes',
                    'Casinha da Serra'
                ]),
            'imageUrl' => $this->faker->randomElement([
                'https://tiaocarreiro.com.br/wp-content/uploads/2016/09/tiao-carreiro-e-pardinho-300x188.jpg',
                'https://i.ytimg.com/vi/c_XVJCWuoEw/sddefault.jpg',
                'https://images-americanas.b2w.io/produtos/2449929047/imagens/cd-tiao-carreiro-e-pardinho-estrela-de-ouro-os-reis-do-pagode/2449929063_1_large.jpg',
                'https://cdns-images.dzcdn.net/images/cover/957f73236e7887ac226093e2b3350b81/1900x1900-000000-80-0-0.jpg'
            ]),
            'year' => $this->faker->numberBetween(1961, 1995)
        ];
    }
}

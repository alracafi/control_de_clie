<?php

namespace Database\Factories;

use App\Models\Clientes;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Clientes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber,
            'zona' => $this->faker->randomElement(['valterra','puerto','el lomo']),
            'localidad' => $this->faker->randomElement(['Arrecife','Playa Honda','Teguise']),
            'forma_pago' => $this->faker->randomElement(['contado','credito']),
            'tipo_cliente' => $this->faker->randomElement(['domicilio','supermercado','bar-cafeteria', 'restaurante','banco','otros']),
            'dia_reparto' => $this->faker->randomElement(['lunes','martes','miercoles','jueves','viernes','sin dia']),
            'frequencia_reparto' => $this->faker->randomElement(['semanal','quincenal','mensual','otros']),
            'condiciones' => $this->faker->text,
            'observaciones' => $this->faker->text,
        ];
    }
}

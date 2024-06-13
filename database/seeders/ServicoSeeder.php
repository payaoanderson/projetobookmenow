<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("pt-BR");
 

 
        DB::table('servicos')->insert([
            [
                "titulo" => "Formatação de Computador",
                "descricao" => $faker->sentence(),
                "valor" => 30.00,
                "qtde_votos" => 5,
                "tota_votos" => 10,
                "telefone" => "14998752545",
                "celular" => "199999999",
                "endereco" => "rua paraiba",
                "numero" => "125",
                "bairro" => "centro",
                "cidade" => "marilia",
                "estado" => "sp",
                "cep" => "17512800",
                "usuario_id" => rand(1,10),
                "categoria_id" => rand(1,6)
            ],
            [
                "titulo" => "Formatação de Computador",
                "descricao" => $faker->sentence(),
                "valor" => 30.00,
                "qtde_votos" => 5,
                "tota_votos" => 10,
                "telefone" => "14998752545",
                "celular" => "199999999",
                "endereco" => "rua paraiba",
                "numero" => "125",
                "bairro" => "centro",
                "cidade" => "marilia",
                "estado" => "sp",
                "cep" => "17512800",
                "usuario_id" => rand(1,10),
                "categoria_id" => rand(1,6)
            ],
            [
                "titulo" => "Formatação de Computador",
                "descricao" => $faker->sentence(),
                "valor" => 30.00,
                "qtde_votos" => 5,
                "tota_votos" => 10,
                "telefone" => "14998752545",
                "celular" => "199999999",
                "endereco" => "rua paraiba",
                "numero" => "125",
                "bairro" => "centro",
                "cidade" => "marilia",
                "estado" => "sp",
                "cep" => "17512800",
                "usuario_id" => rand(1,10),
                "categoria_id" => rand(1,6)
            ],
            [
                "titulo" => "Formatação de Computador",
                "descricao" => $faker->sentence(),
                "valor" => 30.00,
                "qtde_votos" => 5,
                "tota_votos" => 10,
                "telefone" => "14998752545",
                "celular" => "199999999",
                "endereco" => "rua paraiba",
                "numero" => "125",
                "bairro" => "centro",
                "cidade" => "marilia",
                "estado" => "sp",
                "cep" => "17512800",
                "usuario_id" => rand(1,10),
                "categoria_id" => rand(1,6)
            ],
            [
                "titulo" => "Formatação de Computador",
                "descricao" => $faker->sentence(),
                "valor" => 30.00,
                "qtde_votos" => 5,
                "tota_votos" => 10,
                "telefone" => "14998752545",
                "celular" => "199999999",
                "endereco" => "rua paraiba",
                "numero" => "125",
                "bairro" => "centro",
                "cidade" => "marilia",
                "estado" => "sp",
                "cep" => "17512800",
                "usuario_id" => rand(1,10),
                "categoria_id" => rand(1,6)
            ],
            [
                "titulo" => "Formatação de Computador",
                "descricao" => $faker->sentence(),
                "valor" => 30.00,
                "qtde_votos" => 5,
                "tota_votos" => 10,
                "telefone" => "14998752545",
                "celular" => "199999999",
                "endereco" => "rua paraiba",
                "numero" => "125",
                "bairro" => "centro",
                "cidade" => "marilia",
                "estado" => "sp",
                "cep" => "17512800",
                "usuario_id" => rand(1,10),
                "categoria_id" => rand(1,6)
            ],
            [
                "titulo" => "Formatação de Computador",
                "descricao" => $faker->sentence(),
                "valor" => 30.00,
                "qtde_votos" => 5,
                "tota_votos" => 10,
                "telefone" => "14998752545",
                "celular" => "199999999",
                "endereco" => "rua paraiba",
                "numero" => "125",
                "bairro" => "centro",
                "cidade" => "marilia",
                "estado" => "sp",
                "cep" => "17512800",
                "usuario_id" => rand(1,10),
                "categoria_id" => rand(1,6)
            ],
            [
                "titulo" => "Formatação de Computador",
                "descricao" => $faker->sentence(),
                "valor" => 30.00,
                "qtde_votos" => 5,
                "tota_votos" => 10,
                "telefone" => "14998752545",
                "celular" => "199999999",
                "endereco" => "rua paraiba",
                "numero" => "125",
                "bairro" => "centro",
                "cidade" => "marilia",
                "estado" => "sp",
                "cep" => "17512800",
                "usuario_id" => rand(1,10),
                "categoria_id" => rand(1,6)
            ],
            [
                "titulo" => "Formatação de Computador",
                "descricao" => $faker->sentence(),
                "valor" => 30.00,
                "qtde_votos" => 5,
                "tota_votos" => 10,
                "telefone" => "14998752545",
                "celular" => "199999999",
                "endereco" => "rua paraiba",
                "numero" => "125",
                "bairro" => "centro",
                "cidade" => "marilia",
                "estado" => "sp",
                "cep" => "17512800",
                "usuario_id" => rand(1,10),
                "categoria_id" => rand(1,6)
            ],
            [
                "titulo" => "Formatação de Computador",
                "descricao" => $faker->sentence(),
                "valor" => 30.00,
                "qtde_votos" => 5,
                "tota_votos" => 10,
                "telefone" => "14998752545",
                "celular" => "199999999",
                "endereco" => "rua paraiba",
                "numero" => "125",
                "bairro" => "centro",
                "cidade" => "marilia",
                "estado" => "sp",
                "cep" => "17512800",
                "usuario_id" => rand(1,10),
                "categoria_id" => rand(1,6)
            ],
            [
                "titulo" => "Formatação de Computador",
                "descricao" => $faker->sentence(),
                "valor" => 30.00,
                "qtde_votos" => 5,
                "tota_votos" => 10,
                "telefone" => "14998752545",
                "celular" => "199999999",
                "endereco" => "rua paraiba",
                "numero" => "125",
                "bairro" => "centro",
                "cidade" => "marilia",
                "estado" => "sp",
                "cep" => "17512800",
                "usuario_id" => rand(1,10),
                "categoria_id" => rand(1,6)
            ]
        ]);
        
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert(
            "
                INSERT INTO users(nome, sobrenome, email, telefone, pj, cpf, cnpj)
                VALUES
                ('Jonas', 'Lima','email@email.com', '(11)12345-1234',0,'123.123.123-12',''),
                ('Gabriel', 'Gonçalves','email@email.com', '(11)12345-1234',1,'','XX.XXX.XXX/0001-XX')
            "
        );
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into produtos
        	(nome, quantidade, valor, descricao)
        	values(?, ?, ?, ?)',
        	array ('Geladeira', 2, 5900.00,
        		'Side by side com gelo na porta'));

        DB::insert('insert into produtos
        	(nome, quantidade, valor, descricao)
        	values(?, ?, ?, ?)',
        	array ('Fogão', 5, 950.00,
        		'Painel automático e forno elétrico'));

        DB::insert('insert into produtos
        	(nome, quantidade, valor, descricao)
        	values(?, ?, ?, ?)',
        	array ('Microondas', 1, 1520.00,
        		'Envia SMS quando termina de esquentar'));
    }
}

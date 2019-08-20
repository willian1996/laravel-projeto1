<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos(){
        echo "<h1>Produtos</h2>";
        echo "<ol>";
        echo "<li> Notebook</li>";
        echo "<li> Computador</li>";
        echo "<li> Televisão</li>";
        echo "<li> Impressora</li>";
        echo "</ol>";

    
    }
    public function getNome(){
        return "Willian Sales";
    }
    public function getIdade(){
        return "23";
    }
    public function multiplicar($n1, $n2){
        return $n1 * $n2;
    }
}



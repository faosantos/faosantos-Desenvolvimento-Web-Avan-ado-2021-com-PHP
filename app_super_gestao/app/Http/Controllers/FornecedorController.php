<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {

        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 
                'status' =>'N',
                'cnpj' => '0',
                'ddd' => '', //São Paulo(SP)
                'telefone' => '0000-0000'
            ],
            1 => ['nome' => 'Fornecedor 2', 
                'status' =>'S',
                'cnpj' => null,
                'ddd' => '85', //Fortaleza(CE)
                'telefone' => '0000-0000'
            ],
            2 => ['nome' => 'Fornecedor 3', 
            'status' =>'S',
            'cnpj' => null,
            'ddd' => '21', //Rio de Janeiro(RJ)
            'telefone' => '0000-0000'
            ]
        
        ];

        return view('app.fornecedor.index', compact('fornecedores'));

    }
}

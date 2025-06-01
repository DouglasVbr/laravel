<?php   
namespace App\Http\Controllers;




class SeriesController extends Controller
{
    public function listarSeries()
    {
        $series = [
            'Game of Thrones',
            'Breaking Bad',
            'Stranger Things',
            'The Witcher',
            'Dark'
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }

        $html .= '</ul>';

        echo $html;
    }

    public function create()
    {
        echo 'Exibindo a tela de criação de séries';
    }

    public function store()
    {
        echo 'Salvando a série';
    }

    public function show($id)
    {
        echo "Exibindo a série de id {$id}";
    }
}
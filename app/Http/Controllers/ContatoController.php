<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Contato;
 
class ContatoController extends Controller
{
    public function index(){
        return view('index');
    }
    public function showFormContato(){
        return view('cadastrar');
    }
    public function storeContato(Request $request){
        $contato = $request->validate([
            'nomeContato' =>'string|required',
            'foneContato' =>'string|required',
            'emailContato'=>'string|required'
        ]);
 
        Contato::Create($contato);
        return Redirect::route('index');
    }
    public function showGerenciador(Request $request){
        $dados = Contato::query();
        $dados->when($request->nomeContato,function($query,$nome){
            $query->where('nomeContato','like','%'.$nome.'%');
        });
        $dados = $dados->get();
        return view('buscarTodos',['contatos' => $dados]);
    }
    public function destroy(Contato $id){
        $id->delete();
        return Redirect::route('todos-contato');
    }
    public function update(Contato $id, Request $request){
        $contato = $request->validate([
            'nomeContato' =>'string|required',
            'foneContato' =>'string|required',
            'emailContato'=>'string|required'
        ]);
        $id->fill($contato);
        $id->save();
        return Redirect::route('todos-contato');
    }
    public function show(Contato $id){
        return view('alterar',['contatos'=>$id]);
    }
}
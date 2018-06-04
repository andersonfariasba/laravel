<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use App\Categorias;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = '03/06/2016';
        $dt = Carbon::createFromFormat('d/m/Y', $value)->toDateString(); //Carbon::now();
       // echo $dt;
        //echo $dt->toDateString(); 
       // echo $current;
       

        //
       /* $produtos = DB::select('select * from produtos where id_produto');
        foreach ($produtos as $dados) {
         echo $dados->descricao;
        }
        exit;
        */ 


        $produtos = Produtos::orderBy('descricao','asc')->get();
        //$produtos = Produtos::with('categorias')->get();
        //print_r($produtos);
        //exit;

        return view('listProdutos', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$value = '03/06/2016';
        //$dt = Carbon::createFromFormat('d/m/Y', $value)->toDateString(); //Carbon::now();
        // echo $dt;
        //echo $dt->toDateString(); 

        $categorias = Categorias::orderBy('descricao','asc')->get();
        return view('cadastrarProduto',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Produtos::create($request->all());
        return redirect('/produto');
        //print_r($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_produto)
    {
        //
        $categorias = Categorias::orderBy('descricao','asc')->get();
        $produtos = Produtos::find($id_produto);
        return view('editarProduto', compact('produtos','id_produto','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_produto)
    {
        //
        $produtos = Produtos::find($id_produto);
        $produtos->id_categoria = $request->get('id_categoria');
        $produtos->descricao = $request->get('descricao');
        $produtos->save();
       
        return redirect('/produto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

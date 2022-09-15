<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User; 

class UsersController extends Controller
{   

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = $this->user->all();
        return view("users.index", compact("lists"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'zipCode' => 'required',
            'userName' => 'required|unique:users|max:100',
            'password' => 'required|min:8',
        ], [
            'name.required' => 'Campo Nome Completo é obrigatório!',
            'email.required' => 'Campo E-mail é obrigatório!',
            'zipCode.required' => 'Campo CEP é obrigatório!',
            'userName.required' => 'Campo Nome de Login é obrigatório!',
            'password.required' => 'Campo Senha é obrigatório, e deve conter uma letra e um número!',
            'password.min' => 'Campo Senha deve ter no mínimo 8 caracteres!',
        ]);

        DB::beginTransaction();

        try {

            $data               = $request->all();
            $data['password']   = bcrypt($data['password']);
    
            $this->user->create($data);

            DB::commit();

        } catch (\Throwable $th) {

            DB::rollback();
            return redirect()->back()->withErrors(['Ocorreu um erro ao efetuar o cadastro. Tente novamente!'])->withInput();
        }

        return redirect()->route('users.index')->withSuccess('Cadastro criado com Sucesso!');
    }


}

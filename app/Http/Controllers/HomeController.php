<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MiFormulario;
use Validator;


class HomeController extends Controller{
	public function index(){
		return "Bienvenido al tutorial de Laravel 5";
		
	}
	public function getId($id){
		return "Es igual a: ".$id;
		
	}
	public function showview(){
		$msg = "Aprenidendo Laravel 5";
		$array = [1,2,3,4,5,6,7,8,9,10,11];
		$url = url('');
		return View('home.showview',['msg'=>$msg,'array'=>$array,'url'=>$url]);
		
	}
	
	public function form(Request $request){
		if($request->isMethod("post") && $request->has("name")){
			$name = $request->input("name");
		}else{
			$name = "";			
		}
		return View ("home.form",["name"=>$name]);
		
	}
	
	public function miFormulario(){
		$url = url('');
		return View("home.miformulario",["url"=>$url]);
	}
	
	public function validarMiFormulario(MiFormulario $formulario){
    $validator = Validator::make(
            $formulario->all(), 
            $formulario->rules(),
            $formulario->messages()
            );
    if ($validator->valid()){
        return "OK";
    }
}
}
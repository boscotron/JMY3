<?php 


namespace App\Http\Requests;
use App\Http\Requests\Request;


class MiFormulario extends Request {
	
	
	protected $redirect = "home/miformulario";
	
	public function rules(){
		return['nombre' => 'required|min:3|max:12|regex:/^[a-z]+$/i'];
		
	}
	
	public function messages(){
		return['nombre.required' => 'El campo nombre es requerido',
				'nombre.min' => 'Minimo 3 cractares',
				'nombre.max' => 'Maximo 12 cractares',
				'nombre.regex' => 'Solo letras'];
		
	}
	public function response(array $errors){
		return redirect($this->redirect)
				->withErrors($error, 'formulario')
				->withInput();
				
		
	}
	
	public function authorize(){
		return true;
				
		
	}
	
}

?>
<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use App\ProductosModel;
use View;
use App\HasRoles;

use App\Roles;
use App\User;

use Spatie\Permission\Namecontrollers\Role;
use Spatie\Permission\Namecontrollers\Permission;

class UserController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}

    protected $rules =[
	'name' => 'required|min:2|max:255|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ.,()_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ.,()_-]*)*)+$/',
	'email' => 'required|min:2|max:255|regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ.,()_@-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ.,()_-]*)*)+$/',
	];
   
    public function index(){
		$data = User::paginate(5);
		return view('users.index', ['$data' => $data]);
    }
    public function show($id_user){
        return response()->json(User::findOrFail($id_user));
    }
    public function consulta(){
        return response()->json(User::paginate(5));
    }
	public function create(){}

	public function store(Request $request){  
		$validator = Validator::make(Input::all(), $this->rules);
		if ($validator->fails()) {
			return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
		} else {

            $dato = new User();
			$dato->name=$request->name;
			$dato->email=$request->email;
			$dato->save();
			return response()->json($dato);
		}
	}
	public function edit($id){
		foreach ($variable as $key => $value) {
			# code...
		}
	}

	public function update(Request $request, $id){
		$validator = Validator::make(Input::all(), $this->rules);
		if ($validator->fails()) {
			return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
		} else {
			$dato = User::findOrFail($id);
			$dato->name=$request->name;
			$dato->email=$request->email;
			$dato->save();
			return response()->json($dato);
		}
	}

	public function destroy($id){
		$dato = User::findOrFail($id);
		$dato->delete();
		return response()->json($dato);
	}

}
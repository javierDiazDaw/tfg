<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Mail;


use App\Mail\NotifyMail;
use App\Models\Libro;
use App\Models\Peticion;
 
 
class SendEmailController extends Controller
{     
    public function index(Request $request)
    {

    $peticion = new Peticion($request->all());   
     
    $peticion->save();

    $data = [
          "NombreApellidos"=>$request->input("NombreApellidos"),
          "Titulo"=>$request->input("Titulo")
     ];

      //$data=$request->all();
      Mail::to($request->Email)->send(new NotifyMail($data));
      

      return view('solicitarLibroView');            
    }
    
    public function recibirLibro()
    {
        return view('solicitarLibroView');
    }

    public function mostrarPeticiones()
    {
        $peticiones = Peticion::all();
        return view('librosPedidos', ['peticiones' => $peticiones]);
    }
    
    
}    
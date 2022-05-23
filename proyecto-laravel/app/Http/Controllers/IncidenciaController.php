<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidencia;


class IncidenciaController extends Controller
{
    protected $incidencias;

    public function __construct(Incidencia $incidencias)
    {
        $this->incidencias = $incidencias;
    }
    
    public function index()
    {
        $incidencias = $this->incidencias->obtenerIncidencias();
        return view('mostrarIncidenciasView', ['incidencias' => $incidencias]);
    }

    
    public function create()
    {
        return view('crearIncidenciaView');
    }

    
    public function store(Request $request)
    {
        $incidencia = new Incidencia ($request->all());
        $incidencia->save();
        return redirect()->action([IncidenciaController::class, 'index']);
    }


    
    public function update(Request $request, $idIncidencia)
    {
        $incidencia = Incidencia::find($idIncidencia);
        $incidencia->fill($request->all());
        $incidencia->save();
        return redirect()->action([IncidenciaController::class, 'index']);
    }

    
    public function destroy($id)
    {
        $incidencia = Incidencia::find($id);
        $incidencia->delete();
        return redirect()->action([IncidenciaController::class, 'index']);
    }

}


/*<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use PDF;

class LibroController extends Controller
{
    protected $libros;

    public function __construct(Libro $libros)
    {
        $this->libros = $libros;
    }
    
    public function index()
    {
        $libros = $this->libros->obtenerLibros();
        return view('mostrarLibrosView', ['libros' => $libros]);
    }

    
    public function create()
    {
        return view('crearLibroView');
    }

    
    public function store(Request $request)
    {
        $libro = new Libro($request->all());
        $libro->save();
        return redirect()->action([LibroController::class, 'index']);
    }

    
    public function show($isbn)
    {
        $libros = $this->libros->obtenerUnLibro($isbn);
        return view('unLibroView', ['libro' => $libros]);
    }

    
    public function edit($isbn)
    {
        $libro = $this->libros->obtenerUnLibro($isbn);
        return view('editarLibroView', ['libro' => $libro]);
    }

    
    public function update(Request $request, $isbn)
    {
        $libro = Libro::find($isbn);
        $libro->fill($request->all());
        $libro->save();
        return redirect()->action([LibroController::class, 'index']);
    }

    
    public function destroy($id)
    {
        $libro = Libro::find($id);
        $libro->delete();
        return redirect()->action([LibroController::class, 'index']);
    }

}*/

 


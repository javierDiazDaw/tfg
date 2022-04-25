<?php

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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = $this->libros->obtenerLibros();
        return view('mostrarLibrosView', ['libros' => $libros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crearLibroView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libro = new Libro($request->all());
        $libro->save();
        return redirect()->action([LibroController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($isbn)
    {
        $libros = $this->libros->obtenerUnLibro($isbn);
        return view('unLibroView', ['libro' => $libros]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($isbn)
    {
        $libro = $this->libros->obtenerUnLibro($isbn);
        return view('editarLibroView', ['libro' => $libro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $isbn)
    {
        $libro = Libro::find($isbn);
        $libro->fill($request->all());
        $libro->save();
        return redirect()->action([LibroController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro = Libro::find($id);
        $libro->delete();
        return redirect()->action([LibroController::class, 'index']);
    }


    public function PDFtablaCompleta(){
        $data = [
            'libros' => Libro::all()
        ];
           
        $pdf = PDF::loadView('PDFTablaCompletaView', $data);
     
        return $pdf->download('TablaCompletaView.pdf');
    }

    public function PDFDetalle($isbn){
        $data = [
            'libro' => $this->libros->obtenerUnLibro($isbn)
        ];
           
        $pdf = PDF::loadView('PDFDetalleView', $data);
     
        return $pdf->download('DetalleView.pdf');
    }
}

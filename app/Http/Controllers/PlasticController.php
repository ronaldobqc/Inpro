<?php

namespace App\Http\Controllers;

use App\Models\Plastic;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PlasticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plasticos1 = Plastic::all()->where('categoria', 'LINEA HOGAR');
        $plasticos2 = Plastic::all()->where('categoria', 'LINEA ENVASES');
        $plasticos3 = Plastic::all()->where('categoria', 'LINEA BIOSEGURIDAD');
        return view('plasticos', compact('plasticos1', 'plasticos2', 'plasticos3'));
    }

    public function getAll()
    {
        $productos = Plastic::all();
        return view('admin', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plastic = new Plastic;
        $titulo = "CREAR PRODUCTO";
        $textButton= _("Crear");
        $route = route('plasticos.post');
        return view('create',compact('titulo', 'textButton', 'route', 'plastic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('foto')){
            $file = $request->file('foto');
            $name = time().$file->getClientOriginalName();
            $img = Image::make($file);
            $img->resize(340, 340);
            /*$img->rectangle(3, 3, 337, 337, function ($draw) {
                $draw->background('rgba(255, 255, 255, 0.5)');
                $draw->border(2, '#0a4e90');
            });*/
            //$img->insert(public_path().'/assets/img/Agua5.png', 'bottom-left', 110, 70);
            $img->save(public_path().'/images/shop/'.$name);
        }
        
        //$fotografia = Fotografia::create($request->all());

        $plastic = new Plastic();
        $plastic->nombre = $request->input('nombre');
        $plastic->precio = $request->input('precio');
        $plastic->especificacion = $request->input('especificacion');
        $plastic->descripcion = $request->input('descripcion');
        $plastic->categoria = $request->input('categoria');
        $plastic->ubicacion = 'images/shop/'.$name;
        $plastic->save();

        return redirect('plasticos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plastic  $plastic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $update = true;
        $plastic = Plastic::findOrFail($id);
        $titulo = "EDITAR PRODUCTO";
        $textButton= _("Actualizar");
        $route = route('plasticos.put', $plastic['id']);
        return view('create',compact('titulo', 'textButton', 'route', 'plastic', 'update'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plastic  $plastic
     * @return \Illuminate\Http\Response
     */
    public function edit(Plastic $plastic)
    {
        /*$update = true;
        $title = _(key:"Editar Proyecto");
        $textButton= _(key:"Actualziar");
        $route = route('')*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plastic  $plastic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->hasfile('foto')){
            $file = $request->file('foto');
            $name = time().$file->getClientOriginalName();
            $img = Image::make($file);
            $img->resize(340, 340);
            //$img->resize(1280, 720);
            //$img->insert(public_path().'/assets/img/Agua5.png', 'bottom-left', 110, 70);
            $img->save(public_path().'/images/shop/'.$name);
        }

        $plastic = Plastic::findOrFail($id);
        $plastic->nombre = $request->input('nombre');
        $plastic->precio = $request->input('precio');
        $plastic->especificacion = $request->input('especificacion');
        $plastic->descripcion = $request->input('descripcion');
        $plastic->categoria = $request->input('categoria');
        if($request->hasfile('foto')){
            unlink(public_path().'/'.$plastic->ubicacion);
            $plastic->ubicacion = 'images/shop/'.$name;
        }
        $plastic->save();

        return redirect('plasticos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plastic  $plastic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plastic = Plastic::findOrFail($id);
        if($plastic->ubicacion != null){
            unlink(public_path().'/'.$plastic->ubicacion);
        }
        $plastic->delete();
        return redirect('lista');
    }
}

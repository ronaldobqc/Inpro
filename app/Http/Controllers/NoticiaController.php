<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $noticias = Noticia::all();
        return view('noticias', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $noticia = new Noticia;
        $titulo = "CREAR NOTICIA";
        $textButton= _("Crear");
        $route = route('noticia.post');
        return view('createNoticia',compact('titulo', 'textButton', 'route', 'noticia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('portada')){
            $file = $request->file('portada');
            $namePortada = time().$file->getClientOriginalName();
            $img = Image::make($file);
            $img->resize(720, 405, function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->insert(public_path().'/img/icon.png', 'bottom-left', 20, 20);
            $img->save(public_path().'/images/events/'.$namePortada);
        }

        if($request->hasfile('foto')){
            $file = $request->file('foto');
            $nameFoto = time().$file->getClientOriginalName();
            $img = Image::make($file);
            $img->resize(270, 270, function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save(public_path().'/images/events/'.$nameFoto);
        }

        if($request->hasfile('imagen1')){
            $file = $request->file('imagen1');
            $nameImagen1 = time().$file->getClientOriginalName();
            $img = Image::make($file);
            $img->resize(640, 430, function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->insert(public_path().'/img/icon.png', 'bottom-left', 10, 10);
            $img->save(public_path().'/images/events/'.$nameImagen1);
        }

        if($request->hasfile('imagen2')){
            $file = $request->file('imagen2');
            $nameImagen2 = time().$file->getClientOriginalName();
            $img = Image::make($file);
            $img->resize(640, 430, function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->insert(public_path().'/img/icon.png', 'bottom-left', 10, 10);
            $img->save(public_path().'/images/events/'.$nameImagen2);
        }

        if($request->hasfile('imagen3')){
            $file = $request->file('imagen3');
            $nameImagen3 = time().$file->getClientOriginalName();
            $img = Image::make($file);
            $img->resize(640, 430, function ($constraint){
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->insert(public_path().'/img/icon.png', 'bottom-left', 10, 10);
            $img->save(public_path().'/images/events/'.$nameImagen3);
        }
        
        //$fotografia = Fotografia::create($request->all());

        $noticia = new Noticia();
        $noticia->titulo = $request->input('titulo');
        $noticia->autor = $request->input('autor');
        $noticia->fecha = $request->input('fecha');
        $noticia->parrafo1 = $request->input('parrafo1');
        $noticia->parrafo2 = $request->input('parrafo2');
        $noticia->parrafo3 = $request->input('parrafo3');
        $noticia->portada = 'images/events/'.$namePortada;
        $noticia->imagen1 = 'images/events/'.$nameImagen1;
        $noticia->imagen2 = 'images/events/'.$nameImagen2;
        if($request->hasfile('foto')){
            $noticia->foto = 'images/events/'.$nameFoto;
        }
        if($request->hasfile('foto')){
            $noticia->imagen3 = 'images/events/'.$nameImagen3;
        }

        $noticia->save();

        return redirect('noticias');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::findOrFail($id);
        //$noticia->fecha = $noticia->fecha->format('d-m-Y');
        return view('noticia3',compact('noticia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noticia $noticia)
    {
        //
    }
}

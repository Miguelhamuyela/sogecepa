<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\ImageGallery;
use App\Models\InsideGallery;
use App\Models\InsideImagesGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['galleries'] = Gallery::orderBy('id', 'desc')->paginate(6);
        return view('site.gallery.image.all.index', $response);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $title
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        //
        try {
            $response['gallery'] = Gallery::with('images','insideGallery')->where([['name', urldecode($name)]])->first();

            $response['images'] = ImageGallery::where('fk_idGallery',  $response['gallery']->id)->paginate(20);

            return view('site.gallery.image.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.gallery');
        }
    }


    public function details($category){

        try{

            $response['insideGallery'] = InsideGallery::with('images')->where([['category', urldecode($category)]])->first();

            $response['imagesInsideGallery'] = InsideImagesGallery::where('fk_idInsideGallery',  $response['insideGallery']->id)->paginate(20);

            return view('site.gallery.image.singleInsideGallery.index', $response);

        } catch(\Throwable $th){
            return redirect()->route('site.gallery');
        }
    }
}

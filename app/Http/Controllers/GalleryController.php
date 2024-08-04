<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class GalleryController extends Controller {
  /**
   * Display a listing of the resource.
   */
  public function index() {
    $galleries = Auth::user()->galleries;
    return view('gallery.list')->with('galleries', $galleries);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(Request $request) {
    $request->validateWithBag('galleryCreate', [
      'name' => ['required'],
    ]);
    Auth::user()->galleries()->create(['name' => $request->name]);
    return Redirect::to('/gallery');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreGalleryRequest $request) {

  }

  /**
   * Display the specified resource.
   */
  public function show($id) {
    $gallery = Gallery::find($id);
    $images_arr = $gallery->images;
    $images = [];
    foreach ($images_arr as $k => $v) {
      if ($k % 3 == 0) {
        $images['f'][] = $v;
      } elseif ($k % 3 == 1) {
        $images['s'][] = $v;
      } else {
        $images['t'][] = $v;
      }
    }
    return view('gallery.show')->with(['gallery' => $gallery, 'images' => $images]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Gallery $gallery) {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateGalleryRequest $request, Gallery $gallery) {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Gallery $gallery) {
    //
  }
}

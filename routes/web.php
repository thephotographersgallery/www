<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

  Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
  Route::get('/gallery/{id}', [GalleryController::class, 'show'])->name('gallery.show');
  Route::post('/gallery', [GalleryController::class, 'create'])->name('gallery.create');
  Route::post('/images/store', function (Request $request) {
    ini_set('memory_limit','100000240M');
    $gallery_id = $request->gallery_id;
    $request->validate([
      'images' => 'required|array',
      'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'gallery_id' => 'required',
    ]);

    // Initialize an array to store image information
    $images = [];

    // Process each uploaded image
    foreach ($request->file('images') as $image) {
      // Generate a unique name for the image
      $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

      // Move the image to the desired location
      $image->move(public_path('images') . '/' . $gallery_id, $imageName);

      // Add image information to the array
      $images[] = [
        'image' => $gallery_id . '/' . $imageName,
        'gallery_id' => $gallery_id
      ];
    }
    // Store images in the database using create method
    foreach ($images as $imageData) {
      Image::create($imageData);
    }
    return Redirect::to('/gallery/' . $gallery_id);
  })->name('images.store');

  Route::get('/images/all', function (Request $request) {
    function split_into_three($array) {
      $first = [];
      $second = [];
      $third = [];
      foreach ($array as $k => $v) {
        if ($k % 3 == 0) {
          $first[] = $v;
        } elseif ($k % 3 == 1) {
          $second[] = $v;
        } else {
          $third[] = $v;
        }
      }
      dd([$first,$second,$third]);
    }
    $arr = [1, 2, 3, 4, 5, 6];
    split_into_three($arr);
    $posts = Image::all();
    dd($posts);
  })->name('');
});

require __DIR__ . '/auth.php';




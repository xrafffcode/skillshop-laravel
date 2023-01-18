<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductGallery;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;

class MarketplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.my-product', [
            'products' => Product::where('user_id', Auth::user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.create-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('image');


        $data['slug'] = Str::slug($request->title);
        $data['user_id'] = Auth::user()->id;

        try {
            $product = Product::create($data);

            $gallery = [
                'product_id' => $product->id,
                'image' => $request->file('image')->store('assets/product/image', 'public')
            ];

            ProductGallery::create($gallery);
        } catch (Exception $e) {
            SweetAlert::toast('Data Produk Gagal Ditambahkan', 'error')->timerProgressBar();

            return redirect()->route('profil.myproduct');
        }

        SweetAlert::toast('Data Produk Berhasil Ditambahkan', 'success')->timerProgressBar();
        return redirect()->route('profil.myproduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addPhoto($id)
    {
        return view('auth.add-photo-product', [
            'product' => Product::findOrFail($id)
        ]);
    }

    public function storePhoto(Request $request, $id)
    {
        $data = $request->all();

        $data['product_id'] = $id;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('assets/product/image', 'public');
        }

        ProductGallery::create($data);

        SweetAlert::toast('Foto Produk Berhasil Ditambahkan', 'success')->timerProgressBar();
        return redirect()->route('profil.myproduct');
    }
}

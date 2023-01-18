<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductPayment;
use App\Models\TransactionProduct;
use Illuminate\Http\Request;

class OrderProductController extends Controller
{
    public function store(Product $product, Request $request)
    {
        $price = $product->price * $request->item;
        $service = $price * 0.03;

        return view('pages.user.marketplace.filldata', [
            'product' => $product,
            'data' => $request,
            'product' => $product,
            'item' => $request->item,
            'price' => $price,
            'service' => $service,
            'total' => $price + $service
        ]);
    }

    public function review(Product $product, Request $request)
    {
        return view('pages.user.marketplace.review', [
            'data' => $request,
            'product' => $product
        ]);
    }

    public function payment(Product $product, Request $request)
    {
        TransactionProduct::create($request->all());

        return view('pages.user.marketplace.payment', [
            'data' => $request,
            'product' => $product,
        ]);
    }

    public function payment_proccess(Product $product, Request $request)
    {
        $data = TransactionProduct::where('transaction_code', $request->transaction_code)->first();

        return view('pages.user.marketplace.payment_process', [
            'data' => $request,
            'datas' => $data,
            'product' => $product,
        ]);
    }

    public function checkout(Request $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/payment-product',
            'public'
        );

        ProductPayment::create($data);

        $datas = TransactionProduct::findOrFail($request->transaction_product_id);
        $datas->update([
            'transaction_status' => 'WAITING'
        ]);

        $data = Product::findOrFail($datas->product_id);
        $contact = 'https://api.whatsapp.com/send?phone=6285325483259&text=Halo,%20Saya%20' . $datas->name . '%20sudah%20melakukan%20pembayaran%20untuk%20' . $data->type . '%20yaitu%20' . $data->title . '.%20Berikut%20saya%20lampirkan%20bukti%20pembayaran%20:';

        return redirect()->route('checkout-progress')->with(['contact' => $contact]);
    }
}

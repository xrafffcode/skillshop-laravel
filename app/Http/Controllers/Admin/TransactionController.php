<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\TransactionTraining;
use App\Models\UserTraining;
use Exception;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.transaction.index', [
            'transactions' => TransactionTraining::with(['training', 'user'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.admin.transaction.detail', [
            'active' => 'transactions',
            'data' => TransactionTraining::findOrFail($id),
            'payment' => Payment::where('transaction_training_id', $id)->first()
        ]);
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
        try {
            $transaction = TransactionTraining::findOrFail($id);

            $transaction->update([
                'transaction_status' => 'SUCCESS'
            ]);

            UserTraining::create([
                'user_id' => $transaction->user_id,
                'training_id' => $transaction->training_id,
                'status' => 'on_progres'
            ]);
        } catch (Exception $e) {
            SweetAlert::error('Error', $e->getMessage());
        }

        SweetAlert::toast('Transakasi Berhasil Diselesaikan', 'success')->timerProgressBar();
        return redirect()->route('admin.transaksi.index');
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
}

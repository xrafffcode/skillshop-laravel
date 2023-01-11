<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PaymentRequest;
use App\Models\PayLater;
use App\Models\Payment;
use App\Models\Training;
use App\Models\TransactionTraining;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;

class CheckoutController extends Controller
{
    public function index(Training $training)
    {
        return view('pages.user.training.checkout', [
            'training' => $training
        ]);
    }

    public function checkout(Request $request)
    {

        $request->validate([
            'transaction_total' => 'required',
        ]);

        $transaction = TransactionTraining::create([
            'user_id' => Auth::user()->id,
            'training_id' => $request->training_id,
            'transaction_code' => 'TRX' . mt_rand(10000, 99999) . mt_rand(100, 999),
            'name' => Auth::user()->full_name,
            'email' => Auth::user()->email,
            'transaction_total' => $request->transaction_total,
            'transaction_status' => 'PENDING',
            'type' => $request->type
        ]);

        if ($request->type == 'pay_now') {
            SweetAlert::toast('Invoice sudah dibuat, silahkan konfirmasi setelah anda melakukan transfer ke bank kami.', 'success')->timerProgressBar();
            return redirect()->route('checkout.payment', $transaction->transaction_code);
        } else {
            SweetAlert::toast('Invoice sudah dibuat, silahkan upload jaminan.', 'success')->timerProgressBar();
            return redirect()->route('checkout.payment', $transaction->transaction_code);
        }
    }

    public function payment($transaction_code)
    {
        $transaction = TransactionTraining::with(['training', 'user'])->where('transaction_code', $transaction_code)->firstOrFail();

        return view('pages.user.training.payment', [
            'transaction' => $transaction
        ]);
    }

    public function paymentProcess(Request $request)
    {
        $data = $request->all();

        $transaction = TransactionTraining::with(['training', 'user'])->where('id', $request->transaction_training_id)->firstOrFail();

        if ($transaction->type == 'pay_now') {
            $data['user_id'] = Auth::user()->id;
            $data['transaction_training_id'] = $request->transaction_training_id;
            $data['image'] = $request->file('image')->store('assets/payment/image', 'public');

            Payment::create($data);

            $transaction->transaction_status = 'WAITING';

            $transaction->save();

            return view('pages.user.training.success', [
                'type' => $transaction->type
            ]);
        }

        if ($transaction->type == 'pay_later') {
            $data['user_id'] = Auth::user()->id;
            $data['transaction_training_id'] = $request->transaction_training_id;
            $data['id_card_image'] = $request->file('id_card_image')->store('assets/user/guarantee', 'public');
            $data['selfie_photo'] = $request->file('selfie_photo')->store('assets/user/guarantee', 'public');

            PayLater::create($data);

            $transaction->transaction_status = 'WAITING';

            $transaction->save();

            return view('pages.user.training.success', [
                'type' => $transaction->type
            ]);
        }
    }
}

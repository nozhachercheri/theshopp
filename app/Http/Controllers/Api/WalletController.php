<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\WalletCollection;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
class WalletController extends Controller
{
    public function walletRechargeHistory()
    {
        return new WalletCollection(Wallet::where('user_id', auth('api')->user()->id)->latest()->paginate(12));
    }

    public function wallet_payment_done(Request $request)
    {
        $user= User::find(auth('api')->user()->id);
        $user->balance = $user->balance + $request->amount;
        $user->save();

        $wallet = new Wallet;
        $wallet->user_id = $user->id;
        $wallet->amount = $request->amount;
        $wallet->payment_method = $request->payment_method;
        $wallet->payment_details =  $request->payment_details;
        $wallet->details = 'Recharge';
        $wallet->save();
    }
}

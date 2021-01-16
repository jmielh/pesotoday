<?php

namespace App\Http\Controllers;

use App\Models\Tasa;
use App\Models\Team;
use App\Models\User;
use Inertia\Inertia;
use App\Mail\Welcome;
use App\Models\Order;
use App\Models\Receipt;
use Illuminate\Support\Str;
use App\Mail\TransferSubmit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function transfer(Request $request)
    {
        $send = $request->send;
        $send = str_replace("$", "", $send);
        $send = str_replace(",", "", $send);
        $send = intval($send);
        return Inertia::render('Transfer', ['send' => $send]);
    }
    public function payment(Request $request)
    {
        $amount_clp = 10000;
        $amount_ves = 17560000;
        $searchUser = User::where('email', $request->s_email)->first();

        if ($searchUser) {
            $user = $searchUser;
            if (!$user->phone) {
                $user->update(['phone' => $request->s_phone]);
            }
            Auth::loginUsingId($user->id, true);
        } else {

            $password = Str::random(8);
            $user = DB::transaction(function () use ($request, $password) {
                return tap(User::create([
                    'name' => $request['s_name'],
                    'email' => $request['s_email'],
                    'password' => Hash::make($password),
                    'phone' => $request->s_phone,
                ]), function (User $user) {
                    $this->createTeam($user);
                });
            });
            Mail::to($user)->later(now()->addMinute(), new Welcome($user, $password));
            Auth::loginUsingId($user->id, true);
        }
        $searchReceipt = Receipt::where('email', $request->r_email)->first();
        if ($searchReceipt) {
            $receipt = $searchReceipt;
        } else {
            $receipt = Receipt::create([
                'name' => $request->r_name,
                'email' => $request->r_email,
                'user_id' => $user->id,
                'r_id' => $request->r_id,
                'bank' => $request->r_bank,
                'account_type' => $request->r_account_type,
                'account_number' => $request->r_account_number
            ]);
        }
        $order = Order::create([
            'user_id' => $user->id,
            'receipt_id' => $receipt->id,
            'amount_clp' => $amount_clp,
            'amount_ves' => $amount_ves,
            'slug' => Str::slug(Str::random(64)) . '-' . $user->id,
        ]);
        return redirect()->route('paymentAwait', $order->slug);
    }
    function await($slug)
    {
        $order = Order::where('slug', $slug)->firstOrFail();
        $user = $order->user;
        $receipt = $order->receipt;
        Mail::to($user)->later(now()->addMinute(), new TransferSubmit($user, $order));
        return Inertia::render('Payment', ['user' => $user, 'receipt' => $receipt, 'order' => $order]);
    }
    function createTeam(User $user)
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->name, 2)[0] . "'s Team",
            'personal_team' => true,
        ]));
    }
    function showOrder($slug)
    {

        $order = Order::where('slug', $slug)->firstOrFail();
        $order->receipt;
        $user = $order->user;

        return Inertia::render('OrderShow', ['order' => $order]);
    }
    public function updateTasa(Request $request)
    {
        $newTasa = $request->tasa;
        Tasa::first()->update([
            'valor' => $newTasa,
        ]);
    }
    public function updateTasaForm()
    {
        return Inertia::render('UpdateTasa');
    }
}

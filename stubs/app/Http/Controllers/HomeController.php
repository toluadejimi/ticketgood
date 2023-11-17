<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\SoldLog;
use App\Models\Transaction;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index(request $request)
    {

        $data['user'] = Auth::id() ?? null;
        $data['fbaged'] = Category::where('id', 1)->get();
        $data['insta_cat'] = Category::where('id', 2)->get();
        $data['ot'] = Category::where('id', 3)->get();
        $data['tw'] = Category::where('id', 5)->get();
        $data['rd'] = Category::where('id', 6)->get();
        $data['ml'] = Category::where('id', 7)->get();
        $data['gv'] = Category::where('id', 8)->get();
        $data['in'] = Category::where('id', 9)->get();
        $data['tk'] = Category::where('id', 12)->get();
        $data['ln'] = Category::where('id', 13)->get();
        $data['pv'] = Category::where('id', 14)->get();
        $data['oth'] = Category::where('id', 15)->get();
        $data['swr'] = Category::where('id', 16)->get();
        $data['snap'] = Category::where('id', 17)->get();
        $data['strem'] = Category::where('id', 18)->get();
        $data['resell'] = Category::where('id', 19)->get();
        $data['special'] = Category::where('id', 20)->get();










        $data['fbaged_items'] = Item::where('cat_id', 1)->take(5)->get();
        $data['insta_items'] = Item::where('cat_id', 2)->take(5)->get();
        $data['ot_items'] = Item::where('cat_id', 3)->take(5)->get();
        $data['tw_items'] = Item::where('cat_id', 5)->take(5)->get();
        $data['rd_items'] = Item::where('cat_id', 6)->take(5)->get();
        $data['ml_items'] = Item::where('cat_id', 7)->take(5)->get();
        $data['gv_items'] = Item::where('cat_id', 8)->take(5)->get();
        $data['in_items'] = Item::where('cat_id', 9)->take(5)->get();
        $data['tk_items'] = Item::where('cat_id', 12)->take(5)->get();
        $data['ln_items'] = Item::where('cat_id', 13)->take(5)->get();
        $data['pv_items'] = Item::where('cat_id', 14)->take(5)->get();
        $data['oth_items'] = Item::where('cat_id', 15)->take(5)->get();
        $data['swr_items'] = Item::where('cat_id', 16)->take(5)->get();
        $data['snap_items'] = Item::where('cat_id', 17)->take(5)->get();
        $data['strem_items'] = Item::where('cat_id', 18)->take(5)->get();
        $data['resell_items'] = Item::where('cat_id', 19)->take(5)->get();
        $data['special_items'] = Item::where('cat_id', 20)->take(5)->get();




        $data['url'] = null;

        return view('welcome', $data);
    }


    public function welcome_index(request $request)
    {

        $data['user'] = Auth::id() ?? null;
        $data['fbaged'] = Category::where('id', 1)->get();
        $data['insta_cat'] = Category::where('id', 2)->get();
        $data['ot'] = Category::where('id', 3)->get();
        $data['tw'] = Category::where('id', 5)->get();
        $data['rd'] = Category::where('id', 6)->get();
        $data['ml'] = Category::where('id', 7)->get();
        $data['gv'] = Category::where('id', 8)->get();
        $data['in'] = Category::where('id', 9)->get();
        $data['tk'] = Category::where('id', 12)->get();
        $data['ln'] = Category::where('id', 13)->get();
        $data['pv'] = Category::where('id', 14)->get();
        $data['oth'] = Category::where('id', 15)->get();
        $data['swr'] = Category::where('id', 16)->get();
        $data['snap'] = Category::where('id', 17)->get();
        $data['strem'] = Category::where('id', 18)->get();
        $data['resell'] = Category::where('id', 19)->get();
        $data['special'] = Category::where('id', 20)->get();










        $data['fbaged_items'] = Item::where('cat_id', 1)->take(5)->get();
        $data['insta_items'] = Item::where('cat_id', 2)->take(5)->get();
        $data['ot_items'] = Item::where('cat_id', 3)->take(5)->get();
        $data['tw_items'] = Item::where('cat_id', 5)->take(5)->get();
        $data['rd_items'] = Item::where('cat_id', 6)->take(5)->get();
        $data['ml_items'] = Item::where('cat_id', 7)->take(5)->get();
        $data['gv_items'] = Item::where('cat_id', 8)->take(5)->get();
        $data['in_items'] = Item::where('cat_id', 9)->take(5)->get();
        $data['tk_items'] = Item::where('cat_id', 12)->take(5)->get();
        $data['ln_items'] = Item::where('cat_id', 13)->take(5)->get();
        $data['pv_items'] = Item::where('cat_id', 14)->take(5)->get();
        $data['oth_items'] = Item::where('cat_id', 15)->take(5)->get();
        $data['swr_items'] = Item::where('cat_id', 16)->take(5)->get();
        $data['snap_items'] = Item::where('cat_id', 17)->take(5)->get();
        $data['strem_items'] = Item::where('cat_id', 18)->take(5)->get();
        $data['resell_items'] = Item::where('cat_id', 19)->take(5)->get();
        $data['special_items'] = Item::where('cat_id', 20)->take(5)->get();




        $data['url'] = null;

        return view('welcome', $data);
    }



    public function fund_wallet(Request $request)
    {
        $user = Auth::id() ?? null;
        $transaction = Transaction::latest()->where('user_id', Auth::id())->paginate(10);


        return view('fund-wallet', compact('user', 'transaction'));
    }


    public function fund_now(Request $request)
    {

        $request->validate([
            'amount'      => 'required|numeric|gt:0',
        ]);


        Transaction::where('user_id', Auth::id())->where('status', 1)->delete() ?? null;



        if($request->amount < 100){
            return back()->with('error', 'You can not fund less than NGN 100');
        }


        if($request->amount > 100000){
            return back()->with('error', 'You can not fund more than NGN 100,000');
        }




        $key = env('WEBKEY');
        $ref = "LOG-" . random_int(000, 999) . date('ymdhis');
        $email = Auth::user()->email;

        $url = "https://web.enkpay.com/pay?amount=$request->amount&key=$key&ref=$ref&email=$email";


        $data                  = new Transaction();
        $data->user_id         = Auth::id();
        $data->amount          = $request->amount;
        $data->ref_id          = $ref;
        $data->type            = 2;
        $data->status          = 1; //initiate
        $data->save();


        $message = Auth::user()->email. "| wants to fund |  NGN ".number_format($request->amount)." | with ref | $ref |  on LOG MARKETPLACE";
        send_notification2($message);

        return Redirect::to($url);
    }


    public function verify_payment(request $request)
    {

        $trx_id = $request->trans_id;
        $ip = $request->ip();
        $status = $request->status;


        if ($status == 'failed') {


            $message = Auth::user()->email. "| Cancled |  NGN ".number_format($request->amount)." | with ref | $trx_id |  on LOG MARKETPLACE";
            send_notification2($message);

            Transaction::where('ref_id', $trx_id)->where('status', 1)->update(['status' => 3]);
            return redirect('fund-wallet')->with('error', 'Transaction Declined');
        }




        $trxstatus = Transaction::where('ref_id', $trx_id)->first()->status ?? null;

        if ($trxstatus == 2) {

            $message =  Auth::user()->email . "| is trying to fund  with | " . number_format($request->amount, 2) . "\n\n IP ====> " . $request->ip();
            send_notification($message);

            $message =  Auth::user()->email . "| on LOG MarketPlace | is trying to fund  with | " . number_format($request->amount, 2) . "\n\n IP ====> " . $request->ip();
            send_notification2($message);



            return redirect('fund-wallet')->with('error', 'Transaction already confirmed or not found');




        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://web.enkpay.com/api/verify',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('trans_id' => "$trx_id"),
        ));

        $var = curl_exec($curl);
        curl_close($curl);
        $var = json_decode($var);

        $status1 = $var->detail ?? null;
        $amount = $var->price ?? null;




        if ($status1 == 'success') {

            $chk_trx = Transaction::where('ref_id', $trx_id)->first() ?? null;
            if($chk_trx == null){
                return back()->with('error', 'Transaction not processed, Contact Admin');
            }

            Transaction::where('ref_id', $trx_id)->update(['status' => 2]);
            User::where('id', Auth::id())->increment('wallet', $amount);

            $message =  Auth::user()->email . "| just funded NGN" . number_format($request->amount, 2). " on Log market";
            send_notification($message);



            $order_id = $trx_id;
            $databody = array('order_id' => "$order_id");

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://web.enkpay.com/api/resolve-complete',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $databody,
            ));

            $var = curl_exec($curl);
            curl_close($curl);
            $var = json_decode($var);


            $message = Auth::user()->email. "| Just funded |  NGN ".number_format($request->amount)." | with ref | $order_id |  on LOG MARKETPLACE";
            send_notification2($message);


            return redirect('fund-wallet')->with('message', "Wallet has been funded with $amount");

        }

        return redirect('fund-wallet')->with('error', 'Transaction already confirmed or not found');
    }





    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {


            $user = Auth::id() ?? null;
            return redirect('welcome');

        }

        return back()->with('error', "Email or Password Incorrect");
    }


    public function register_index(Request $request)
    {
        return view('register');

    }


     public function login_index(Request $request)
     {
         return view('login');

    }


    public function register(Request $request)
    {
        // Validate the user input
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:4|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Log in the user after registration (optional)
        auth()->login($user);

        // Redirect the user to a protected route or dashboard
        return redirect('/');
    }





    public function profile(request $request)
    {


        $user = Auth::id();
        $orders = SoldLog::latest()->where('user_id', Auth::id())->paginate(5);


        return view('profile', compact('user', 'orders'));
    }




    public function logout(Request $request)
    {

        Auth::logout();
        return redirect('/');
    }


    public function session_resolve(request $request)
    {



        $resolve = session_resolve($request->session_id);

        $status = $resolve[0]['status'];
        $amount = $resolve[0]['amount'];
        $message = $resolve[0]['message'];



        $trx = Transaction::where('ref_id', $request->ref_id)->first()->status ?? null;
        if($trx == null){

            $message = Auth::user()->email. "is trying to resolve from deleted transaction on LOG MarketPlace";
            send_notification($message);

            $message = Auth::user()->email. "is trying to reslove from deleted transaction on LOG MarketPlace";
            send_notification2($message);



            return back()->with('error', "Transaction has been deleted");

        }


        $chk = Transaction::where('ref_id', $request->ref_id)->first()->status ?? null;

        if($chk == 2 || $chk == 4 ){

            $message = Auth::user()->email. "is trying to steal hits the endpoint twice on LOG MarketPlace";
            send_notification($message);

            $message = Auth::user()->email. "is trying to steal hits the endpoint twice on LOG MarketPlace";
            send_notification2($message);

            return back()->with('message', "You are a thief");


        }


        if ($status == 'true') {

            User::where('id', Auth::id())->increment('wallet', $amount);
            Transaction::where('ref_id', $request->ref_id)->update(['status' => 4]);



            $ref = "LOG-" . random_int(000, 999) . date('ymdhis');


            $data                  = new Transaction();
            $data->user_id         = Auth::id();
            $data->amount          = $amount;
            $data->ref_id          = $ref;
            $data->type            = 2;
            $data->status          = 2;
            $data->save();


            $message = Auth::user()->email. "| just resolved with $request->session_id | NGN ".number_format($amount)." on LOG MarketPlace";
            send_notification($message);

            $message = Auth::user()->email. "| just resolved with $request->session_id | NGN ".number_format($amount)." on LOG MarketPlace";
            send_notification2($message);


            return back()->with('message', "Transaction successfully Resolved, NGN $amount added to ur wallet");



        }

        if ($status == false) {
            return back()->with('error', "$message");
        }
    }



    public function change_password(request $request)
    {

        $user = Auth::id();


        return view('change-password', compact('user'));
    }



    public function faq(request $request)
    {
        $user = Auth::id();
        return view('faq', compact('user'));
    }

    public function terms(request $request)
    {
        $user = Auth::id();
        return view('terms', compact('user'));
    }

    public function rules(request $request)
    {
        $user = Auth::id();
        return view('rules', compact('user'));
    }

    public function policy(request $request)
    {
        $user = Auth::id();
        return view('policy', compact('user'));
    }




    public function update_password_now(request $request)
    {
        // Validate the user input
        $validatedData = $request->validate([
            'password' => 'required|string|min:4|confirmed',
        ]);

        User::where('id', Auth::id())->update([
            'password' => Hash::make($validatedData['password']),
        ]);

        // Redirect the user to a protected route or dashboard
        return back()->with('message', 'Password Changed Successfully');
    }


    public function forget_password(request $request)
    {

        $user = Auth::id() ?? null;

        return view('forget-password', compact('user'));
    }

    public function reset_password(request $request)
    {

        $email = $request->email;
        $expiryTimestamp = time() + 24 * 60 * 60; // 24 hours in seconds
        $url = url('') . "/verify-password?code=$expiryTimestamp&email=$request->email";

        $ck = User::where('email', $request->email)->first()->email ?? null;

        if ($ck == $request->email) {

            User::where('email', $email)->update([
                'code' => $expiryTimestamp
            ]);

            $data = array(
                'fromsender' => 'noreply@logmarketplace.com', 'LOG MARKETPLACE',
                'subject' => "Reset Password",
                'toreceiver' => $email,
                'url' => $url,
            );


            Mail::send('reset-password-mail', ["data1" => $data], function ($message) use ($data) {
                $message->from($data['fromsender']);
                $message->to($data['toreceiver']);
                $message->subject($data['subject']);
            });



            return redirect('/forgot-password')->with('message', "A reset password mail has been sent to $request->email, if not inside inbox check your spam folder");
        } else {
            return back()->with('error', 'Email can not be found on our system');
        }
    }


    public function verify_password(request $request)
    {

        $code = User::where('email', $request->email)->first()->code;


        $storedExpiryTimestamp = $request->code;;

        if (time() >= $storedExpiryTimestamp) {

            $user = Auth::id() ?? null;
            $email = $request->email;
            return view('expired', compact('user', 'email'));
        } else {

            $user = Auth::id() ?? null;
            $email = $request->email;

            return view('verify-password', compact('user', 'email'));
        }
    }


    public function expired(request $request)
    {
        $user = Auth::id() ?? null;
        return view('expired', compact('user'));
    }

    public function reset_password_now(request $request)
    {

        $validatedData = $request->validate([
            'password' => 'required|string|min:4|confirmed',
        ]);


        $password = Hash::make($validatedData['password']);

        User::where('email', $request->email)->update([

            'password' => $password

        ]);

        return redirect('/')->with('message', 'Password reset successful, Please login to continue');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\MainItem;
use App\Models\Product;
use App\Models\SoldLog;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


    public function index(request $request){




        return view('admin-login');




    }

	public function admin_login(request $request)
	{



        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {

            $role = User::where('username', $request->username)->first()->role_id;
            if($role != 2){

                Auth::logout();
                return redirect('/admin')->with('error', "You do not have permission");

            }



            return redirect('admin-dashboard');


        }

        return back()->with('error', "Email or Password Incorrect");





	}



    public function edit_front_product(request $request)
	{


        Item::where('id', $request->id)->first()->update([

            'amount' => $request->amount,
            'title' => $request->title,
            'qty' => $request->qty



        ]);


        return back()->with('message', 'Front Item successfully Updated');

    }

	public function admin_dashboard(request $request)
	{

        $role = User::where('id', Auth::id())->first()->role_id ?? null;
        if($role != 2){

            Auth::logout();
            return redirect('/admin')->with('error', "You do not have permission");

        }


        $user = User::all()->count();
        $total_in = Transaction::where('type', 2)->where('status', 2)->sum('amount');
        $total_p = MainItem::count();
        $total_f = Item::count();
        $orders = SoldLog::latest()->paginate(10);
        $insta = MainItem::where('product_id', 2)->count();
        $fb = MainItem::where('product_id', 1)->count();
        $gv = MainItem::where('product_id', 4)->count();
        $transaction = Transaction::latest()->paginate(10);
        $total_in_d = Transaction::where(['type' => 2, 'status' => 2])->whereday('created_at', Carbon::today())->sum('amount');
        $total_out = Transaction::where('type', 1)->sum('amount');
        $user_wallet = User::where('role_id', 2)->sum('wallet');


        return view('admin-dashboard', compact('user','user_wallet','total_out','total_in_d','transaction','insta','fb', 'gv', 'orders', 'total_in', 'total_p', 'total_f'));

	}



    public function index_user(request $request)
	{

        $role = User::where('id', Auth::id())->first()->role_id ?? null;
        if($role != 2){

            Auth::logout();
            return redirect('/admin')->with('error', "You do not have permission");

        }


        $user = User::all()->count();
        $users = User::latest()->paginate(10);


        return view('user', compact('user', 'users'));


    }



    public function update_user(request $request)
	{


        if($request->trade == 'credit'){
            User::where('id',$request->id)->increment('wallet', $request->amount);
        }else{

            User::where('id',$request->id)->decrement('wallet', $request->amount);

            return back()->with('error', 'Wallet Debited Successfully');

        }


        return back()->with('message', 'Wallet Credited Successfully');


    }



    public function view_user(request $request)
	{

        $role = User::where('id', Auth::id())->first()->role_id ?? null;
        
        if($role != 2){

            Auth::logout();
            return redirect('/admin')->with('error', "You do not have permission");

        }


        $user = User::where('id', $request->id)->first();
        $transaction= Transaction::latest()->where('user_id', $request->id)->paginate();
        $order = SoldLog::latest()->where('user_id', $request->id)->paginate();


        return view('view-user', compact('user', 'transaction','order' ));


    }



    public function categories(request $request)
	{

        $role = User::where('id', Auth::id())->first()->role_id ?? null;
        if($role != 2){

            Auth::logout();
            return redirect('/admin')->with('error', "You do not have permission");

        }

        $categories = Category::all()->count();
        $categoriess = Category::select('*')->get();
        return view('categories', compact('categories', 'categoriess'));



    }


    public function add_new_cat(request $request)
	{



        $tt = new Category();
        $tt->title = $request->title;
        $tt->save();


        return back()->with('message', 'Category Added Successfully');



    }



    public function add_new_pr(request $request)
	{



        $tt = new Product();
        $tt->name = $request->title;
        $tt->save();


        return back()->with('message', 'Product Added Successfully');



    }

     public function delete_cat(request $request)
	{



        Category::where('id', $request->id)->delete();
        return back()->with('message', 'Category Removed Successfully');



    }


    public function delete_pr(request $request)
	{



        Category::where('id', $request->id)->delete();
        return back()->with('message', 'Products Removed Successfully');



    }


       public function index_product(request $request)
	{


        $role = User::where('id', Auth::id())->first()->role_id ?? null;
        if($role != 2){

            Auth::logout();
            return redirect('/admin')->with('error', "You do not have permission");

        }

        $item = Product::latest()->paginate(5);
        $pr_list = Product::all();

        $main = MainItem::all()->count();
        $cat = Category::all();
        $pr = MainItem::latest()->paginate(10);
        $front_pr = Item::latest()->paginate(10);




        $fb = Item::where('product_id', 2)->count();
        $gv = Item::where('product_id', 3)->count();
        $in = Item::where('product_id', 1)->count();



        $categoriess = Category::select('*')->get();
        return view('products', compact('item', 'pr', 'pr_list', 'front_pr', 'cat', 'main', 'fb', 'gv', 'in'));





    }

    public function delete_front_pr(request $request)
	{

        Item::where('id', $request->id)->delete();

        return back()->with('message', "Item Deleted Successfully");


    }


    public function delete_pro(request $request)
	{

        Product::where('id', $request->id)->delete();

        return back()->with('message', "Item Deleted Successfully");


    }


    public function delete_main(request $request)
	{

        MainItem::where('id', $request->id)->delete();

        return back()->with('message', "Item Deleted Successfully");


    }


    public function search_user(request $request)
	{


       $get_id = User::where('email', $request->email)->first()->id;

       $data['users'] = User::where('id', $get_id)->get();
       $data['user'] = User::all()->count();
       $data['transaction'] = Transaction::latest()->where('user_id', $get_id)->paginate();
       $data['order'] = SoldLog::latest()->where('user_id', $get_id)->paginate();



       return view('user-search', $data);


    }


    public function search_username(request $request)
	{

       $get_id = User::where('username', $request->username)->first()->id;

       $data['users'] = User::where('id', $get_id)->get();
       $data['user'] = User::all()->count();
       $data['transaction'] = Transaction::latest()->where('user_id', $get_id)->paginate();
       $data['order'] = SoldLog::latest()->where('user_id', $get_id)->paginate();


       return view('user-search', $data);


    }







}

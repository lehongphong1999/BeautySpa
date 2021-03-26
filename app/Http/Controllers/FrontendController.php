<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\categories;
use App\products;
use App\news;
use App\intros;
use App\users;
use App\news_sales;
use App\contacts;
use App\book_appointments;
use App\cart;
use App\orders;
use App\detail_orders;

class FrontendController extends Controller
{
    public function index(){
        $services = categories::where('devide',1)->limit(4)->get();
        $product_category = categories::where('devide',2)->get();
        $product = products::all();
        $news = news::limit(4)->get();
        return view('Frontend.index',compact('services','product_category','product','news'));
    }
    public function about(){
        $intros = intros::where('status',1)->get();
        return view('Frontend.about',compact('intros'));
    }
    public function sale(){
        $newssale = news_sales::all();
        return view('Frontend.sale',compact('newssale'));
    }
    public function service(){
        $service = products::all();
        $service_category = categories::where('devide',1)->get();
        return view('Frontend.service',compact('service','service_category'));
    }
    public function product(){
        $product = products::paginate(8);
        $product_category = categories::where('devide',2)->get();
        return view('Frontend.product',compact('product','product_category'));
    }
    public function contact(){
        return view('Frontend.contact');
    }
    public function book(){
        $id = $_GET['id'];
        $category = categories::where('id',$id)->get();
        return view('Frontend.book',compact('category'));
    }
    public function postbook(Request $request){
        if(Auth::check()){
            $book_appointment = new book_appointments();
            $book_appointment->service = $request->service;
            $book_appointment->time_book = $request->time_book;
            $book_appointment->note = $request->note;
            $book_appointment->id_user = Auth::user()->id;
            $book_appointment->save();
            return redirect()->route('index');
        }else{
            return redirect()->route('index');
        }
    }

    public function bookk(){
        $id = $_GET['id'];
        $product = products::where('id',$id)->get();
        return view('Frontend.bookk',compact('product'));
    }

    public function postcontact(Request $request){
        $contact = new contacts();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email_sender = $request->email_sender;
        $contact->subject = $request->subject;
        $contact->content = $request->content;
        $contact->save();
        return redirect()->route('contact');
    }
    public function news(){
        return view('Frontend.news');
    }
    public function userinfo(){
        return view('Frontend.layouts_user.user_info');
    }
    public function postedituserinfo(Request $request){
        $db = users::where('id',Auth::user()->id)->update([
            'name' => $request->name,
            'sex' => $request->sex,
            'cmnd' => $request->cmnd,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect()->route('userinfo');
    }
    public function postavataruserinfo(Request $request){
        
            $fileImage = time().'_'.$request->avatar->getClientOriginalName();
            $request->avatar->move(public_path('sources/img/user'), $fileImage);
            $db = users::where('id',Auth::user()->id)->update([
                'avata' => 'sources/img/user/'.$fileImage,
        ]);
        return redirect()->route('userinfo');
    }
    public function usersecurity(){
        return view('Frontend.layouts_user.user_security');
    }
    public function postusersecurity(Request $request){
        if(Hash::check($request->passold, Auth::user()->password)){
            if($request->repassnew == $request->passnew){
                $update = users::where('id',Auth::user()->id)->update([
                    'password' => bcrypt($request->repassnew)
                ]);
                return redirect()->back();
            }else{
                return redirect()->route('usersecurity');
            }
        }else{
            return redirect()->route('usersecurity');
        }
        // return redirect()->back();
    }
    public function userhistory(){
        $history = orders::where('id_user',Auth::user()->id)->get();
        return view('Frontend.layouts_user.user_history',compact('history'));
        // return view('Frontend.layouts_user.user_history');
    }

    public function detailorder(){
        $id = $_GET['id'];
        $order = orders::find($id);
        $detail_order = detail_orders::where('id_order',$id)->get();
        return view('Frontend.layouts_user.detail_order',compact('order','detail_order'));
    }

    public function addcart(Request $request){
        if(Auth::check()){
            $check = 0;
            $allcart = cart::where('id_user',Auth::user()->id)->get();
            foreach($allcart as $item){
                if($item->id_product == $request->id){
                    $check = 1;
                    break;
                }
            }
            if($check==0){
                $cart = new cart();
                $cart->id_user = Auth::user()->id;
                $cart->id_product = $request->id;
                $cart->quantity = $request->quantity;
                $cart->save();
            }else{
                $cart = cart::where('id_user',Auth::user()->id)->where('id_product',$request->id)->get();
                $newquantity = $cart[0]->quantity + $request->quantity;
                $update = cart::where('id_user',Auth::user()->id)->where('id_product',$request->id)->update([
                    'quantity' => $newquantity
                ]);
            }
            return redirect()->back();
        }else{
            return redirect()->route('index');
        }
    }

    public function cart(){
        $allcart = cart::where('id_user',Auth::user()->id)->get();
        return view('Frontend.layouts_user.cart',compact('allcart'));
    }
    public function deleteitemcart(){
        if(Auth::check()){
            if (isset($_GET['id'])&&!empty($_GET['id'])) {  
                $db = cart::where('id_product',$_GET['id'])->where('id_user',Auth::user()->id)->delete();
                return redirect()->route('cart');
            }
            else {  
                return redirect()->route('index');
            } 
        }else{
            return redirect()->route('index');
        }   
    }
    public function checkout(){
        $total = 0;
        $allcart = cart::where('id_user',Auth::user()->id)->get();
        foreach($allcart as $item){
            $total = $total + ($item->product->price * $item->quantity);
        }
        return view('Frontend.layouts_user.checkout',compact('total'));
    }

    public function postcheckout(Request $request){
        $order = new orders();
        $max = orders::max('id'); 
        $allcart = cart::where('id_user',Auth::user()->id)->get();
        $order->id= $max + 1;
        $order->id_user = Auth::user()->id;
        $order->total_money = $request->total;
        $order->method_ship = $request->ship;
        $order->pay = $request->pay;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->note = $request->note;
        $order->save();

        foreach($allcart as $item){
            $detail = new detail_orders();
            $detail->id_order = $max + 1;
            $detail->id_product = $item->id_product;
            $detail->quantity = $item->quantity;
            $detail->save();
        }
        
        $madon = $max + 1;
        $name = $request->name;
        $address = $request->address;
        $delete = cart::where('id_user',Auth::user()->id)->delete();
        return view('Frontend.layouts_user.finish_order',compact('madon','name','address','allcart'));
    }

    public function finish(){
        return view('Frontend.layouts_user.finish_order');
    }

    public function search(Request $request){
        $product = products::where('product_name','LIKE',"%$request->search%")->get();
        return view('Frontend.search',compact('product',));
    }

}

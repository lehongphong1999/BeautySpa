<?php

namespace App\Http\Controllers;
use App\categories;
use App\products;
use App\banners;
use App\contacts;
use App\news;
use App\intros;
use App\coupons;
use App\news_sales;
use App\book_appointments;
use App\users;
use App\orders;
use App\permissions;
use App\role_permission;
use App\role;
use App\detail_orders;
use Illuminate\Http\Request;

class AdminController extends Controller
{
// View Index Dash Board
    public function indexdashboard(){
        $db = orders::all();
        $dbuser = users::all();
        $dbcontact = contacts::all();
        return view('Admin.Dashboard.index',compact('db','dbuser','dbcontact'));
    }
//Controller Info user
    //View Index Info user
    // public function indexinfo(){
    //     return view('Admin.Infouser.info');
    // }
    
//Controller Category
    // View Index Category
    public function indexcategory(){
        $db = categories::paginate(10);
        return view('Admin.category.index',compact('db'));
    }
    // View Add Category 
    public function addcategory(){
        $db = categories::where('parent_id',0)->get();
        return view('Admin.category.add',compact('db'));
    }
    // View Post Data up DB  
    public function postaddcategory(Request $request){
        $db = new categories(); //Create a category new
        $db->category_name = $request->category_name;
        $db->price = $request->price;
        $db->slug = $request->slug;
        $db->content = $request->content;
        $db->parent_id = $request->parent_id;
        $db->is_active = $request->is_active;
        $db->devide = $request->devide;
        $db->save();
        return redirect()->route('indexcategory');
    }
    //View Edit Category
    public function editcategory(){
        $id = $_GET['id']; //Get id category 
        $db = categories::find($id);  // Search data category follow id 
        return view('Admin.Category.edit',compact('db')); // Return view "Edit - category" ; compact: trans data in  variable "db" 
        
    }
    //View Post data updated up DB
    public function posteditcategory(Request $request){
        $db = categories::where('id',$request->id)->update([ // search id and update
            'category_name' => $request->category_name,
            'price5' => $request->price,
            'slug' => $request->slug,
            'content' => $request->content,
            'parent_id' => $request->parent_id,
            'is_active' => $request->is_active,
            'devide' => $request->devide,
        ]);
        return redirect()->route('indexcategory');
    }
    //View Delete category 
    public function deletecatergory(){
        if (isset($_GET['id'])&&!empty($_GET['id'])) { // Check id empty 
            $db = categories::find($_GET['id'])->delete();
            return redirect()->route('indexcategory');
        }
        else {    
        }    
    }

//Controller Product 
    //View Product
    public function  indexproduct(){
        $db = products::paginate(10);
        return view('Admin.Product.index',compact('db'));
    }
    //View Add Product
    public function addproduct(){
        return view('Admin.product.add');
    }
    //View Post data add product
    public function postaddproduct(Request $request){
        $db = new products();
        $db->product_name = $request->product_name;
        $db->price = $request->price;
        $db->sale_percent = $request->sale_percent;
        $db->description = $request->description;
        $db->link_image = $request->link_image;
        $db->quantity = $request->quantity;
        $db->sold = $request->sold;
        $db->status = $request->status;
        $db->category_large_id = $request->category_large_id;
        $db->category_small_id = $request->category_small_id;
        $db->save();
        return redirect()->route('indexproduct');
    }
    //View Edit Product
    public function editproduct(){
        $id = $_GET['id']; 
        $db = products::find($id);
        return view('Admin.Product.edit',compact('db'));
    }
    //View Post 
    public function posteditproduct(Request $request){
        $db = products::where('id',$request->id)->update([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'sale_percent' => $request->sale_percent,
            'description' => $request->description,
            'link_image' => $request->link_image,
            'quantity' => $request->quantity,
            'sold' => $request->sold,
            'status' => $request->status,
            'category_large_id' => $request->category_large_id,
            'category_small_id' => $request->category_small_id,
        ]);
        return redirect()->route('indexproduct');
    }
    public function deleteproduct(){
        if (isset($_GET['id'])&&!empty($_GET['id'])) {
            $db = products::find($_GET['id'])->delete();
            return redirect()->route('indexproduct');
        }
        else {    
        }    
    }
    //Controller Service
    //View Service
    public function  indexservice(){
        $service = products::all();
        $service_category = categories::where('devide',1)->get();
        return view('Admin.Service.index',compact('service','service_category'));
    }
    //View Add Service
    public function addservice(){
        return view('Admin.Service.add');
    }
    //View Post data add Service
    public function postaddservice (Request $request){
        $db = new products();
        $db->product_name = $request->product_name;
        $db->price = $request->price;
        $db->sale_percent = $request->sale_percent;
        $db->description = $request->description;
        $db->link_image = $request->link_image;
        $db->status = $request->status;
        $db->category_large_id = $request->category_large_id;
        $db->category_small_id = $request->category_small_id;
        $db->save();
        return redirect()->route('indexservice');
    }
    //View Edit Service
    public function editservice(){
        $id = $_GET['id']; 
        $db = products::find($id);
        return view('Admin.Service.edit',compact('db'));
    }
    //View Post Service
    public function posteditservice(Request $request){
        $db = products::where('id',$request->id)->update([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'sale_percent' => $request->sale_percent,
            'description' => $request->description,
            'link_image' => $request->link_image,
            'status' => $request->status,
            'category_large_id' => $request->category_large_id,
            'category_small_id' => $request->category_small_id,
        ]);
        return redirect()->route('indexservice');
    }
    public function deleteservice(){
        if (isset($_GET['id'])&&!empty($_GET['id'])) {
            $db = products::find($_GET['id'])->delete();
            return redirect()->route('indexservice');
        }
        else {    
        }    
    }
//Controller Banner
    //View Banner
    public function indexbanner(){
        $db = banners::paginate(10);
        return view('Admin.Banner.index',compact('db'));
    }
    //View Add Product
    public function addbanner(){
        return view('Admin.banner.add');
    }
    //View Post data add Banner
    public function postaddbanner(Request $request){
        $db = new banners();
        $db->link_image_banner = $request->link_image_banner;
        $db->title = $request->title;
        $db->content = $request->content;
        $db->link_url_event = $request->link_url_event;
        $db->status = $request->status;
        $db->save();
        return redirect()->route('indexbanner');
    }
    //View Edit Banner
    public function editbanner(){
        $id = $_GET['id']; 
        $db = banners::find($id);
        return view('Admin.Banner.edit',compact('db'));
    }
    //View Post banner
    public function posteditbanner(Request $request){
        $db = banners::where('id',$request->id)->update([
            'link_image_banner' => $request->link_image_banner,
            'title' => $request->title,
            'content' => $request->content,
            'link_url_event' => $request->link_url_event,
            'status' => $request->status,
        ]);
        return redirect()->route('indexbanner');
    }
    public function deletebanner(){
        if (isset($_GET['id'])&&!empty($_GET['id'])) {
            $db = banners::find($_GET['id'])->delete();
            return redirect()->route('indexbanner');
        }
        else {    
        }    
    }
//View Contact
    public function indexcontact(){
        $db = contacts::paginate(20);
        return view('Admin.contact.index',compact('db'));
    }    
    public function readcontact(){
        $id = $_GET['id'];
        $db = contacts::find($id);
        return view('Admin.contact.readmail',compact('db'));
    }
    public function deletcontact(){
        if (isset($_GET['id'])&&!empty($_GET['id'])) {
            $db = contacts::find($_GET['id'])->delete();
            return redirect()->route('indexcontact');
        }
        else {    
        }    
    }

//Controller News
    // View Index News
    public function indexnews(){
        $db = news::paginate(10);
        return view('Admin.news.index',compact('db'));
    }
    // View Add News 
    public function addnews(){
        return view('Admin.news.add');
    }
    // View Post Data up DB  
    public function postaddnews(Request $request){
        $db = new news(); //Create a news new
        $db->title = $request->title;
        $db->content = $request->content;

        $fileImage = time().'_'.$request->file_img->getClientOriginalName();
        $request->file_img->move(public_path('sources/img/news'), $fileImage);
        $db->file_img = 'sources/img/news/'.$fileImage;

        $db->status = $request->status;
        $db->save();
        return redirect()->route('indexnews');
    }
    //View Edit news
    public function editnews(){
        $id = $_GET['id']; //Get id news 
        $db = news::find($id);  // Search data news follow id 
        return view('Admin.news.edit',compact('db')); // Return view "Edit - news" ; compact: trans data in  variable "db" 
        
    }
    public function posteditnews(Request $request){
        
        $fileImage = time().'_'.$request->file_img->getClientOriginalName();
        $request->file_img->move(public_path('sources/img/news'), $fileImage);
        $db = news::where('id',$request->id)->update([ // search id and update
            'title' => $request->title,
            'content' => $request->content,
            'file_img' => 'sources/img/news/'.$fileImage,
            'status' => $request->status,
        ]);
        return redirect()->route('indexnews');
    }
    
    //View Delete news 
    public function deletenews(){
        if (isset($_GET['id'])&&!empty($_GET['id'])) { // Check id empty 
            $db = news::find($_GET['id'])->delete();
            return redirect()->route('indexnews');
        }
        else {    
        }    
    }


//Controller Intro
    // View Index intro
    public function indexintro(){
        $db = intros::paginate(10);
        return view('Admin.intros.index',compact('db'));
    }
    // View Add Intro
    public function addintro(){
        return view('Admin.intros.add');
    }
    // View Post Data up DB  
    public function postaddintro(Request $request){
        $db = new intros(); //Create a intro new
        $db->content = $request->content;

        // $fileImage = time().'_'.$request->file_img->getClientOriginalName();
        // $request->file_img->move(public_path('sources/img/intro'), $fileImage);
        // $db->file_img = 'sources/img/intro/'.$fileImage;

        $db->file_img = $request->file_img;
        $db->status = $request->status;
        $db->save();
        return redirect()->route('indexintro');
    }
    //View Edit intro
    public function editintro(){
        $id = $_GET['id']; //Get id intro 
        $db = intros::find($id);  // Search data news follow id 
        return view('Admin.intros.edit',compact('db')); // Return view "Edit - intros" ; compact: trans data in  variable "db" 
        
    }
    //View Post data updated up DB
    public function posteditintro(Request $request){
        $db = intros::where('id',$request->id)->update([ // search id and update
            'content' => $request->content,
            'file_img' => $request->file_img,
            'status' => $request->status,
        ]);
        return redirect()->route('indexintro');
    }
    //View Delete intro 
    public function deleteintro(){
        if (isset($_GET['id'])&&!empty($_GET['id'])) { // Check id empty 
            $db = intros::find($_GET['id'])->delete();
            return redirect()->route('indexintro');
        }
        else {    
        }    
    }

//Controller Coupon 
    //View Coupon
    public function indexcoupon(){
        $db = coupons::paginate(5);
        return view('Admin.Coupon.index',compact('db'));
    }
    //View Add Coupon
    public function addcoupon(){
        return view('Admin.Coupon.add');
    }
    //View Post data Add Coupon
    public function postaddcoupon(Request $request){
        $db = new coupons();
        $db->code_coupon = $request->code_coupon;
        $db->percent = $request->percent;
        $db->quantity = $request->quantity;
        $db->used = $request->used;
        $db->status = $request->status;
        $db->save();
        return redirect()->route('indexcoupon');
    }
    //View Edit Coupon
    public function editcoupon(){
        $id = $_GET['id']; 
        $db = coupons::find($id);
        return view('Admin.Coupon.edit',compact('db'));
    }
    //View Post 
    public function posteditcoupon(Request $request){
        $db = coupons::where('id',$request->id)->update([
            'code_coupon' => $request->code_coupon,
            'percent' => $request->percent,
            'quantity' => $request->quantity,
            'used' => $request->used,
            'status' => $request->status,
        ]);
        return redirect()->route('indexcoupon');
    }
    public function deletecoupon(){
        if (isset($_GET['id'])&&!empty($_GET['id'])) {
            $db = coupons::find($_GET['id'])->delete();
            return redirect()->route('indexcoupon');
        }
        else {    
        }    
    }

//Controller News Sale
    // View Index News Sale
    public function indexnewssale(){
        $db = news_sales::paginate(10);
        return view('Admin.News_sale.index',compact('db'));
    }
    // View Add NewsSale 
    public function addnewssale(){
        return view('Admin.News_sale.add');
    }
    // View Post Data up DB  
    public function postaddnewssale(Request $request){
        $db = new news_sales(); //Create a news sale new
        $db->title = $request->title;
        $db->content = $request->content;

        $fileImage = time().'_'.$request->img->getClientOriginalName();
        $request->img->move(public_path('sources/img/newssale'), $fileImage);
        $db->img = 'sources/img/newssale/'.$fileImage;

        $db->code_coupon = $request->code_coupon;
        $db->status = $request->status;
        $db->save();
        return redirect()->route('indexnewssale');
    }
    //View Edit news
    public function editnewssale(){
        $id = $_GET['id']; //Get id news 
        $db = news_sales::find($id);  // Search data news follow id 
        return view('Admin.News_sale.edit',compact('db')); 
        
    }
    public function posteditnewssale(Request $request){
        
        $fileImage = time().'_'.$request->img->getClientOriginalName();
        $request->img->move(public_path('sources/img/newssale'), $fileImage);
        $db = news_sales::where('id',$request->id)->update([ // search id and update
            'title' => $request->title,
            'content' => $request->content,
            'img' => 'sources/img/newssale/'.$fileImage,
            'code_coupon' => $request->code_coupon,
            'status' => $request->status,
        ]);
        return redirect()->route('indexnewssale');
    }
    
    //View Delete news sale
    public function deletenewssale(){
        if (isset($_GET['id'])&&!empty($_GET['id'])) { // Check id empty 
            $db = news_sales::find($_GET['id'])->delete();
            return redirect()->route('indexnewssale');
        }
        else {    
        }    
    }

//Controller User_Role
    //View Index User 
    public function indexuser(){
        $db = users::paginate(10);
        return view('Admin.User.index',compact('db'));
    }
    //View Add User
    public function adduser(){
        $permissions = permissions::all();
        return view('Admin.User.add',compact('permissions'));
    }
    //View Post data Add User
    public function postadduser(Request $request){
        $db = new user();
        $db->name = $request->name;
        $db->mail = $request->mail;
        $db->phone = $request->phone;
        $db->description = $request->description;
        $db->save();
        return redirect()->route('indexuser');
    }
    //View Edit User
    public function edituser(){
        $id = $_GET['id']; 
        $db = users::find($id);  // Search data news follow id 
        $permissions = permissions::all();
        return view('Admin.User.edit',compact('db','permissions'));  
    }
//Controller Role
    //View Index Role
    public function indexrole(){
        $db = role::all();
        return view('Admin.Role.index',compact('db'));
    }
    //View Add Role
    public function addrole(){
        $permissions = permissions::all();
        return view('Admin.Role.add',compact('permissions'));
    }
    //View Post add Role
    public function postaddrole(Request $request){
        $db = new role_permission();
        $db->role_id = $request->role_id;
        $db->permission_id = $request->permission_id;
        $db->save();
        return redirect()->route('indexrole');
    }    
    //View edit Role
    public function editrole(){
        $id = $_GET['id']; 
        $db = role::find($id);  
        $role_permission = role_permission::where('role_id' , $id)->get();
        $permissions = permissions::all();
        // foreach($role_permission as $it){
        //     echo $it->permission_id;
        // }
        return view('Admin.Role.edit',compact('db','permissions','role_permission'));
    }
    public function posteditrole(Request $request, $id){
        $db = role::find($id);
        $data = $request['permission'];
        // dd($db->permissions()->sync($data));
        $db->fill($request->all())->save();
        $db->permissions()->sync($data);
        return redirect()->route('indexrole');
    }
    // Delete Role
    public function deleterole(){
        if (isset($_GET['id'])&&!empty($_GET['id'])) { // Check id empty 
            $db = role::where('id',$_GET['id'])->delete();
            return redirect()->route('indexrole');
        }
        else {    
        }    
    }

    
//Controller Revenue
    //View Index Revenue Day
    public function indexrevenue(){ 
        $db = orders::all();
        return view('Admin.Revenue.index',compact('db'));
    }
    //View Index Revenue Month
    public function index2revenue(){
        $db = orders::all();
        return view('Admin.Revenue.index2',compact('db'));
    }
    //View Show detail Revenue Day
    public function showdetailday(){
        $id = $_GET['id']; 
        $order = orders::find($id);  
        $detail_order = detail_orders::where('id_order',$id)->get();
        // $dbb = orders::join('detail_orders','detail_orders.id_order','=','orders.id')->get();
        // $dbbb = products::join('detail_orders','detail_orders.id_product','=','products.id')->get();
        return view('Admin.Revenue.detail',compact('order','detail_order')); 
        
    }
    // Delete Revenue
    public function deleterevenue(){
        if (isset($_GET['id'])&&!empty($_GET['id'])) { // Check id empty 
            $db = orders::where('id',$_GET['id'])->delete();
            return redirect()->route('indexrevenue');
        }
        else {    
        }    
    }
//Controller Order
    //View Index Order
    public function indexorder(){
        $db = orders::all();
        return view('Admin.Order.index',compact('db'));
    }
    
    //View Show detail Order
    public function showdetailorder(){
        $id = $_GET['id']; 
        $order = orders::find($id);  
        $detail_order = detail_orders::where('id_order',$id)->get();
        return view('Admin.Order.detail',compact('order','detail_order')); 
     
        
    }
    // Delete Order
    public function deleteorder(){
        if (isset($_GET['id'])&&!empty($_GET['id'])) { // Check id empty 
            $db = orders::where('id',$_GET['id'])->delete();
            return redirect()->route('indexbook');
        }
        else {    
        }    
    }
//Controller Book spa
    //View Index Book spa 
    public function indexbook(){
        $db = book_appointments::join('users','users.id','=','book_appointments.id_user')->get();
        $dbb = book_appointments::all();
        return view('Admin.Book.index',compact('db','dbb'));
    }
    //View Edit Book spa
    public function editbook(){
        $id_book = $_GET['id_book']; 
        $db = book_appointments::where('id_book',$id_book)->get();
        return view('Admin.Book.edit',compact('db'));
    }
    //View Post 
    public function posteditbook(Request $request,$id){
        $db = book_appointments::where('id_book',$id)->update([
            'status_reply' => $request->status_reply,
        ]);
        return redirect()->route('indexbook');
    }
    // Delete Book spa
    public function deletebook(){
        if (isset($_GET['id_book'])&&!empty($_GET['id_book'])) { 
            $db = book_appointments::where('id_book',$_GET['id_book'])->delete();
            return redirect()->route('indexbook');
        }
        else {    
        }    
    }
}

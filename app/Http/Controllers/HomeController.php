<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use App\Model\Page;
use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->get();
        return view('index',compact('categories'));
    }

    public function custom_cases()
    {
        return view('custom_cases');
    }

    public function about_us()
    {
        return view('about_us');
    }

    public function contact_us()
    {
        return view('contact_us');
    }

    public function categories()
    {
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->select('id','name')->get();
        $products = Product::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->select('id','name','category_pic')->paginate(12);

        return view('categories',compact('categories','products')) ;
    }

    public function category($id)
    {
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->select('id','name')->get();
        $products = Category::find($id)->products()->orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->select('id','name','category_pic')->paginate(12);
        $category = Category::find($id);

        return view('category',compact('categories','products','category'));
    }

    public function product_detail(Product $product)
    {
        $categories = Category::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->select('id','name')->get();
        $category = $product->category;
        $related_products = $category->products()->orderBy('sort', 'asc')->take(3)->select('id','name','category_pic')->get();

        return view('product_detail',compact('categories','product','category','related_products'));
    }

    public function news_and_tech()
    {
        $articles = Page::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->paginate(10);
        return view('news',compact('articles'));
    }

    public function news()
    {
        $articles = Page::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->where('tag','new')->paginate(10);
        return view('news',compact('articles'));
    }

    public function tech()
    {
        $articles = Page::orderBy('sort', 'asc')->orderBy('updated_at', 'desc')->where('tag','tech')->paginate(10);
        return view('news',compact('articles'));
    }

    public function new_detail(Page $page)
    {
        return view('new_detail',compact('page'));
    }

    public function submit(Request $request)
    {
        $form['name'] = $request->name;
        $form['email']=$request->email;
        $form['message']=$request->message;
        $form['url']=$request->url;

        Mail::send('emails.mail',['form'=>$form], function ($message) {
            $message->from('info@e.furnace-tech.com', 'chaos');
            $message->to(['info@lab-furnace.com','chaos29092@gmail.com',]);
            $message->subject('诺泰网站留言');
        });

        return redirect('/submit_ok');
    }

    public function submit_ok()
    {
        return view('submit_ok');
    }

    public function sitemap()
    {
        echo simplexml_load_file('sitemap.xml')->asXML();
    }

}

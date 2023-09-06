<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Faq;
Use App\Contact;
use App\Product;
use App\Category;
use App\Testimony;
use App\Complaint;

class PagesController extends Controller
{
    // Home
    public function home()
    {
        $products = Product::all();
        $contacts = Contact::all();
        $categories = Category::all();
        $testimonies = Testimony::all();
        return view ('home', compact('products', 'testimonies', 'contacts', 'categories'));
    }

    // Kategori
    public function kategori(Request $request)
    {
        if($request->has('cari')){
            $products = Product::where('nama','like',"%".$request->cari."%")->get();
            $categories = Category::all();
            $contacts = Contact::all();
        }
        else{
            $products = Product::all();
            $categories = Category::all();
            $contacts = Contact::all();
        }
        return view ('kategori', compact('products', 'categories', 'contacts'));
    }

    public function kategoriSort($id)
    {   
        $contacts = Contact::all();
        $categories = Category::all();
        $products = Product::where('categories_id', $id)->get();
        return view ('kategori', compact('products', 'categories', 'contacts'));
    }
    
    public function detail(Product $product)
    {   
        $products = Product::all();
        $contacts = Contact::all();
        return view ('detail', compact('products','product','contacts'));
    }

    // FAQ
    public function faqIndex()
    {
        $faqs = Faq::all();
        $contacts = Contact::all();
        return view('faq', compact('faqs', 'contacts'));
    }
    public function faqShow()
    {
        return view('faq', compact('faq'));
    }

    // Tentang
    public function tentang()
    {  
        $contacts = Contact::all();
        return view ('tentang', compact('contacts'));
    }

    // Admin
    public function admin()
    {
        $products = Product::all();
        $faqs = Faq::all();
        $complaints = Complaint::all();
        $testimonies = Testimony::all();
        return view ('dashboard', compact('products', 'faqs', 'complaints', 'testimonies'));

    }
}

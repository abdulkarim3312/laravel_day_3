<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Student;
use Illuminate\Http\Request;
use function Spatie\Ignition\Config\theme;

class TestController extends Controller
{
    private $students, $fullName, $result, $i;
    private $products;
    private $product;

    public function index()
    {
        $this->students = Student::getAllStudent();
        return view('test', ['students' => $this->students]);
    }

    public function about()
    {
        $this->products = Product::getAllProduct();
        return view('about', ['products' => $this->products]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function series()
    {
        return view('series');
    }
    public function calculator()
    {
        return view('calculator');
    }
    public function detail($id)
    {
        $this->product = Product::getProductById($id);
        return view('product-detail'. ['$product'=> $this->product]);
    }
    public function fullName(Request $request)
    {
        $this->fullName = $request->first_name.' '.$request->last_name;
        return redirect('/contact')->with('message', $this->fullName);
    }

    public function newSeries(Request $request)
    {
        for ($this->i = $request->starting_number; $this->i<=$request->ending_number; $this->i++)
        {
            $this->result .=$this->i.' ';
        }
        return redirect('/series')->with('message', $this->result);
    }
}

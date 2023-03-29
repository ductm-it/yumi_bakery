<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Order;
use Carbon\Carbon;

class ShoppingCartController extends Controller
{

    public function index() {
        $shopping = \Cart::content();
        return view('frontend.pages.shopping.index', compact('shopping'));
    }

    // add product in cart

    public function add($id){
        $product = Product::find($id);
        if(!$product) return redirect()->to('/');
        else
        \Cart::add([
            'id'        => $product->id,
            'name'      => $product->pro_name,
            'qty'       => 1,
            'price'     => $product->pro_price,
            'weight'    => 550,
            'options'   => [
                'sale'  => $product->pro_sale,
                'image' =>$product->pro_avatar
                ]
            ]);
        return redirect()->back();
    }
    // delete product in cart
    public function delete($rowId){
        \Cart::remove($rowId);
        return redirect()->back();
    }

    // getform process cart product in cart
    public function getFormPay(){
        return view('frontend.pages.shopping.pay');
    }
    public function postPay(Request $request){
        $data = $request->except('_token');
        if(isset(\Auth::user()->id)){
            $data['tst_user_id'] = \Auth::user()->id;
        }
        $data['tst_total_money'] = str_replace(',', '', \Cart::subtotal(0));
        $data['created_at']   = Carbon::now();
        $transactionID = Transaction::insertGetId($data);
        if($transactionID){
            $shopping = \Cart::content();
            foreach ( $shopping as $key => $item){
                Order::insert([
                    'od_transaction_id' => $transactionID,
                    'od_product_id' => $item->id,
                    'od_sale' => $item->options->sale,
                    'od_qty' => $item->qty,
                    'od_price' => $item->price
                ]);
            }
        }
        \Cart::destroy();
        return redirect()->to('/');
    }
}

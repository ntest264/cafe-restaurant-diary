<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop, App\Category;    // Shopモデル、Categoryモデルを参照する

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // getでshops/にアクセスされた場合の「一覧表示処理」
    public function index(Request $request)
    {
         $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            $categories = \App\Category::orderBy('id','asc')->pluck('name', 'name');
           
         $id = $request->id;
         if (!is_null($id)) {
            $shops = $user->shops()->where('id', $id)->orderBy('created_at', 'desc')->paginate(10);
            }
         else {
            // ユーザの投稿の一覧を作成日時の降順で取得
            $shops = $user->shops()->orderBy('created_at', 'desc')->paginate(10);
            }
           
            $data = [
                'user' => $user,
                'shops' => $shops,
                'categories' => $categories,
                'id' => $id,
            ];
        }
        // Welcomeビューでそれらを表示
        return view('welcome', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // getでshops/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        //Shopモデルのためのフォーム。フォーム入力のためにインスタンス作成。
        $shop = new Shop;
        $categories = \App\Category::orderBy('id','asc')->pluck('name', 'name');
        $categories = $categories -> prepend('選択してください', '');

        // お店情報登録ビューを表示
        return view('shops.create', [
        //shopという箱の中に$shopという値が入っている
            'shop' => $shop,
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // postでshops/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'category' => 'required|max:255',
            'shop_name' => 'required|max:255',
            'place' => 'required|max:255',
            'other' => 'required|max:255',
        ]);
        
        // 認証済みユーザ（閲覧者）のお店情報として作成（リクエストされた値をもとに作成）
        $request->user()->shops()->create([
        'category' => $request->category,
        'shop_name' => $request->shop_name,
        'place' => $request->place,
        'other' => $request->other,
        ]);
        
        //登録完了時に表示するメッセージ
        session()->flash('flash_message', '登録が完了しました');
        // トップページへリダイレクトさせる
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // getでshops/（任意のid）にアクセスされた場合の「取得表示処理」
    ///messages/1, /messages/4 といったURLにアクセスされたとき、 $id = 1 や $id = 4 のように代入される。
    public function show($id)
    {
        // idの値で店舗情報を検索して取得
        $shop = Shop::findOrFail($id);
        // 認証済みユーザ（閲覧者）がその登録情報の所有者である場合は、タスクを閲覧
         if (\Auth::id() === $shop->user_id) {

        //登録店舗詳細ビューでそれを表示
        return view('shops.show', [
            'shop' => $shop,
        ]);
         }
        // トップページへリダイレクトさせる
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // getでshops/（任意のid）/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        
        // idの値で登録情報を検索して取得
        $shop = Shop::findOrFail($id);
        // 認証済みユーザ（閲覧者）がその登録情報の所有者である場合は、投稿を編集
         if (\Auth::id() === $shop->user_id) {
        // 登録情報編集ビューでそれを表示
        return view('shops.edit', [
            'shop' => $shop,
        ]);
        
        }
        // トップページへリダイレクトさせる
        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // putまたはpatchでshops/（任意のid）にアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        // バリデーション
        $request->validate([
            'category' => 'required|max:255',
            'shop_name' => 'required|max:255',
            'place' => 'required|max:255',
            'other' => 'required|max:255',
        ]);
         // idの値でお店情報を検索して取得
        $shop = Shop::findOrFail($id);
        // 情報を更新
        $shop->category = $request->category;
        $shop->shop_name = $request->shop_name;
        $shop->place = $request->place;
        $shop->other = $request->other;
        $shop->save();
      
        //更新完了時に表示するメッセージ
        session()->flash('flash_message', '更新しました');
        // トップページへリダイレクトさせる
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // deleteでshops/（任意のid）にアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        // idの値で登録情報を検索して取得
        $shop = Shop::findOrFail($id);
        // 認証済みユーザ（閲覧者）がその情報の所有者である場合は、登録情報を削除
       if (\Auth::id() === $shop->user_id) {
        $shop->delete();
       }
        
        //登録情報削除時に表示するメッセージ
        session()->flash('flash_message', '削除しました');
        // トップページへリダイレクトさせる
        return redirect('/');
    }
}

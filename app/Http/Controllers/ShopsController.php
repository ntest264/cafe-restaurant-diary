<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;    // Shopモデルを参照する

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // getでshops/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
         // お店情報（Shopモデル）一覧を取得。$shopsに入ったデータをviewに渡す。
        $shops = Shop::all();

        // お店情報一覧ビューでそれを表示（Controllerから特定のViewを呼び出す）
        return view('shops.index', [
            //shopsという箱の中にshopsという値が入っている。
            'shops' => $shops,
        ]);
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

        // お店情報登録ビューを表示
        return view('shops.create', [
        //shopという箱の中に$shopという値が入っている
            'shop' => $shop,
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
         // お店情報を作成
        $shop = new Shop;
        //送られてきたフォームの内容categoryを$requestから取り出す。
        $shop->category = $request->category;
        $shop->shop_name = $request->shop_name;
        $shop->place = $request->place;
        $shop->other = $request->other;
        //新規作成したお店情報をインスタンスに代入・保存
        $shop->save();

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
        //レコードすべてではなく指定されたidの値でお店情報を1つ検索して取得
        $shop = Shop::findOrFail($id);

        //登録店舗詳細ビューでそれを表示
        return view('shops.show', [
            'shop' => $shop,
        ]);
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

        // 登録情報編集ビューでそれを表示
        return view('shops.edit', [
            'shop' => $shop,
        ]);
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
         // idの値でお店情報を検索して取得
        $shop = Shop::findOrFail($id);
        // 情報を更新
        $shop->category = $request->category;
        $shop->shop_name = $request->shop_name;
        $shop->place = $request->place;
        $shop->other = $request->other;
        $shop->save();

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
        //
    }
}

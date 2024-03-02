<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests\Test\confirmRequest;

class TestController extends Controller
{
    /**
     * 会員情報変更画面
     * 
     * @return view
     */
    public function index() {
        // インスタンス
        $usersModel = new Users;
        // ユーザー情報を取得
        $userData = $usersModel->getUsersById(1);
        // 画面表示
        return view('Test.index',compact('userData'));
    }

    /**
     * 会員情報変更確認画面
     * 
     * @param Request $request
     * @return view
     */
    public function confirm(confirmRequest $request) {
        // リクエストから入力情報を取得
        $userData = $request->input();
        // 画面表示
        return view('Test.confirm',compact('userData'));
    }

    public function complete(Request $request) {
        // インスタンス
        $usersModel = new Users;
        // リクエストから入力情報を取得
        $userData = $request->input();
        // ユーザー情報を更新
        $update = $usersModel->updateUsers($userData);
        // 画面表示
        return view('Test.complete',compact('update'));
    }
}

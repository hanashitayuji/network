<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Service\Calculation\indexService;

class CalculationController extends Controller
{
    /**
     * 計算ツール画面
     * 
     * @return view
     */
    public function index() {
        // 画面表示
        return view('Calculation.index');
    }

    /**
     * 計算ツール画面
     * 
     * @param Request $request
     * @return view
     */
    public function execution(Request $request) {
        // リクエストから値を取得
        $num1 = $request->num1;
        $num2 = $request->num2;
        // 渡された値で計算を実施
        $indexService = new indexService;
        $num = $indexService->getnum($num1,$num2);
        if($num) {
            // レスポンスを設定
            $response = [
                "status" => 200
            ];
            $response = array_merge($response,$num);
        } else {
            // レスポンスを設定
            $response = [
                "status" => 0
            ];
        }
        // レスポンスをJSON形式に変換
        $response = json_encode($response);
        // レスポンスを返却
        return $response;
    }
}

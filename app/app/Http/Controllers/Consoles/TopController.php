<?php

namespace App\Http\Controllers\Consoles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * TopController
 * 
 * 管理コンソール：トップページ
 * 
 */
class TopController extends Controller
{
    /**
     * index
     * 
     * 管理コンソール：トップページ
     * HTTP Method GET
     * https://{host}
     * 
     * @param Request request リクエスト
     * @return View
     */
    public function index(Request $request)
    {
        try
        {
            return view('consoles.top');
        }
        catch (\Exception $e)
        {
            throw $e;
        }
    }
}

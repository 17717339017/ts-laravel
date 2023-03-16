<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index() {
        // 响应一个数组
        //return $this->response->array(['name', 'age']);
        // 无内容响应
        return $this->response->noContent();
    }

    public function name() {
        $url = app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('test.name');
        dd($url);
    }
}

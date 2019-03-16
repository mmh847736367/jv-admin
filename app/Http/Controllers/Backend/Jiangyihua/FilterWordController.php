<?php


namespace App\Http\Controllers\Backend\Jiangyihua;


use App\Http\Controllers\Backend\FilterWord;
use App\Http\Controllers\Controller;

class FilterWordController extends Controller
{
    use FilterWord;

    protected $site = 'jiangyihua';

    protected $siteTitle = '讲一话';

}
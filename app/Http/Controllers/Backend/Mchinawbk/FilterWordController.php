<?php


namespace App\Http\Controllers\Backend\Mchinawbk;


use App\Http\Controllers\Backend\FilterWord;
use App\Http\Controllers\Controller;

class FilterWordController extends Controller
{
    use FilterWord;

    protected $site = 'mchinawbk';

    protected $siteTitle = '移动影音网';

}
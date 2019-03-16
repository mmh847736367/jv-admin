<?php


namespace App\Http\Controllers\Backend\Chinawbk;


use App\Http\Controllers\Backend\FilterWord;
use App\Http\Controllers\Controller;

class FilterWordController extends Controller
{
    use FilterWord;

    protected $site = 'chinawbk';

    protected $siteTitle = '移动图书网';

}
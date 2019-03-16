<?php


namespace App\Http\Controllers\Backend\Chengyekeji;


use App\Http\Controllers\Backend\FilterWord;
use App\Http\Controllers\Controller;

class FilterWordController extends Controller
{
    use FilterWord;

    protected $site = 'chengyekeji';

    protected $siteTitle = '橙叶知识网';

}
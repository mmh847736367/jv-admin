<?php


namespace App\Http\Controllers\Backend\Chinashangpinku;


use App\Http\Controllers\Backend\FilterWord;
use App\Http\Controllers\Controller;

class FilterWordController extends Controller
{
    use FilterWord;

    protected $site = 'chinashangpinku';

    protected $siteTitle = '中华商品库';

}
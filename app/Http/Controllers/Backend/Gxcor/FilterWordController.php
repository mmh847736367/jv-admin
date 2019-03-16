<?php


namespace App\Http\Controllers\Backend\Gxcor;


use App\Http\Controllers\Backend\FilterWord;
use App\Http\Controllers\Controller;

class FilterWordController extends Controller
{
    use FilterWord;

    protected $site = 'gxcor';

    protected $siteTitle = '购库网';

}
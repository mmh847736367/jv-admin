<?php


namespace App\Http\Controllers\Backend\Byete;


use App\Http\Controllers\Backend\FilterWord;
use App\Http\Controllers\Controller;

class FilterWordController extends Controller
{
    use FilterWord;

    protected $site = 'byete';

    protected $siteTitle = '必应比价网';

}
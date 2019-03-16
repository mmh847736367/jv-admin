<?php


namespace App\Http\Controllers\Backend\Jiangshanshi;


use App\Http\Controllers\Backend\FilterWord;
use App\Http\Controllers\Controller;

class FilterWordController extends Controller
{
    use FilterWord;

    protected $site = 'jiangshanshi';

    protected $siteTitle = '拼购网';



}
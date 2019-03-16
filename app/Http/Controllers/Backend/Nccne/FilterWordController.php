<?php


namespace App\Http\Controllers\Backend\Nccne;


use App\Http\Controllers\Backend\FilterWord;
use App\Http\Controllers\Controller;

class FilterWordController extends Controller
{
    use FilterWord;

    protected $site = 'nccne';

    protected $siteTitle = '你瞅啥';


}
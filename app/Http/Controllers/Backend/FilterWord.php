<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

trait FilterWord
{
//    protected $site;

//    protected $siteTitle;

    public function index()
    {
        $path = 'filterword/'.$this->site.'_utf8.txt';
        if(!Storage::exists($path)) {
            return view('backend.filterword.index')->with(['content' => '', 'siteTitle' => $this->siteTitle, 'site' => $this->site]);
        }
        $words = Storage::get($path);
        $words = collect(explode("\r\n",$words));
        $content = $words->implode('; ');
        $count = $words->count();
        return view('backend.filterword.index')
            ->with(['content' => $content, 'siteTitle' => $this->siteTitle, 'count' => $count, 'site' => $this->site]) ;
    }

    public function store(Request $request)
    {
        $content = $request->only('body');
        Storage::put('filterword/'.$this->site.'_utf8.txt', $content);
        return redirect()->route('admin.'.$this->site.'.filterword.index')->withFlashSuccess('更新成功');
    }

    public function upload(Request $request)
    {
        $file = $request->file('keyword');

        if (!$file->isValid()) {
            return redirect()->route('admin.'.$this->site.'.filterword.create')->withFlashDanger('文件验证失败');
        }
//        if($file->extension() != 'txt'){
//            return redirect()->route('admin.'.$this->site.'.filterword.create')->withFlashDanger('文件必须为txt');
//        }
        $file->storeAs('filterword', $this->site.'.txt');
        $this->reStore();

        return redirect()->route('admin.'.$this->site.'.filterword.create')->withFlashSuccess('文件上传成功');
    }

    public function edit()
    {
        $path = 'filterword/'.$this->site.'_utf8.txt';
        if(!Storage::exists($path)) {
            return redirect()->route('admin.'.$this->site.'.filterword.index');
        }
        $content = Storage::get($path);
        return view('backend.filterword.edit')
            ->with(['content' => $content, 'siteTitle' => $this->siteTitle, 'site' => $this->site]);
    }

    public function create()
    {
        return view('backend.filterword.create')->with(['siteTitle'=> $this->siteTitle, 'site' => $this->site]);
    }

    public function reStore()
    {
        $words = Storage::get('filterword/'.$this->site.'.txt');

        $words = collect(explode("\n",$words))->filter(function($word) {
            return !empty($word);
        })->map(function ($word) {
            return trim(iconv('GBK', 'UTF-8',$word), "\r");
        });

        $content = $words->implode("\r\n");
        Storage::put('filterword/'.$this->site.'_utf8.txt', $content);
    }
}
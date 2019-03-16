@extends('backend.layouts.app')

@section('title', app_name() . ' | ' .$siteTitle.'敏感词管理')

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                    <h4 class="card-title mb-0">
                        {{ $siteTitle }}所有敏感词
                    </h4>
                    @if(!empty($content))
                    <p class="text-info">共{{ $count }}个</p>
                    @endif
                </div><!--col-->
                <div class="col-sm-8">
                    <div class="btn-toolbar float-right" role="toolbar" >
                        <a href="{{ route('admin.'.$site.'.filterword.create') }}" class="btn btn-success ml-1" data-toggle="tooltip" title="敏感词上传">敏感词上传</a>
                        <a href="{{ route('admin.'.$site.'.filterword.edit') }}" class="btn btn-success ml-1" data-toggle="tooltip" title="敏感词编辑">敏感词编辑</a>

                    </div><!--btn-toolbar-->
                </div><!--col-->
                {{--<div class="col-sm-1">--}}
                    {{--<div class="btn-toolbar float-right" role="toolbar" >--}}
                    {{--</div><!--btn-toolbar-->--}}
                {{--</div><!--col-->--}}
            </div>
            <div class="row mt-4">
                <div class="col">
                    @if(empty($content))
                        <p class="text-center">没有敏感词，请先上传</p>
                    @else
                        <p>{{ $content }}</p>
                    @endif
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection





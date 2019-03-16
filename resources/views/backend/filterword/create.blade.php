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
                        {{ $siteTitle }}敏感词上传
                    </h4>
                </div><!--col-->
            </div>
            <div class="row mt-4">
                <div class="col">
                        <form action="{{ route('admin.'.$site.'.filterword.upload') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input id="file" type="file" name="keyword" required>
                            <input type="hidden" name="uploaded" value="1">
                            <button type="submit" class="btn btn-primary">上传</button>
                        </form>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection




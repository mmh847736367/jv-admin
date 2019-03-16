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
                </div><!--col-->
            </div>
            <div class="row mt-4">
                <div class="col">
                    <form action="{{ route('admin.'.$site.'.filterword.store') }}" method="post">
                        @csrf
                        <textarea class="form-control" name="body" id="" cols="30" rows="50" required>{{ $content }}</textarea>
                        <button class="btn btn-primary" type="submit">保存</button>
                    </form>
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
@endsection






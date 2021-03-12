@extends('layouts.frontsec')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>My プロフィール</h1>
            @if (!is_null($posts))
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-10">
                                    <p type="text" class="form-control" name="name">{{ str_limit($posts->name, 70) }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                                    <p type="text" class="form-control" name="gender">{{ str_limit($posts->gender, 70) }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        <div class="col-md-10">
                                    <p type="text" class="form-control" name="hobby">{{ str_limit($posts->hobby, 70) }}</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-10">
                                    <textarea class="form-control" name="introduction" rows="20">{{ str_limit($posts->introduction, 650) }}</textarea>
                        </div>
                    </div>
            @endif
                <div class="row">
                    <div class="posts col-md-8 mx-auto mt-3">
                
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
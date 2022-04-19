<?php
$title = 'ホーム';
?>


@extends('layouts.app')

@section('content')
<form class="form-home" action="">
    <div class="home-text">
        <h5>予約可能回数:0/2</h5>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-md-6 offset-md-3">
                    <ul class="btn-home list-group list-group-horizontal">
                        <li class="flex-fill">
                            <a class="btn border rounded-pill" href="{{ route('create_reserve') }}">
                                {{ __('技能予約') }}
                            </a>
                        </li>
                        <li class="flex-fill">
                            <a class="btn border rounded-pill" href="#">
                                {{ __('送迎予約') }}
                            </a>
                        </li>
                    </ul>
                    <ul class="btn-home list-group list-group-horizontal">
                        <li class="flex-fill">
                            <a class="btn border rounded-pill" href="{{ route('view_reserves') }}">
                                {{ __('予約状況確認') }}
                            </a>
                        </li>
                        <li class="flex-fill">
                            <a class="btn border rounded-pill" href="#">
                                {{ __('設定') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

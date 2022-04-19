<?php
$title = '予約状況確認';
?>


@extends('layouts.app')

@section('content')
<form class="view-reserve" action="">
    <div class="container">
        <div class="border-bottom mt-1">
            <ul class="list-group list-group-horizontal">
                <li style="padding-right:10px;">
                    <h5>[1]</h5>
                </li>
                <li style="padding-left:30px;">
                    <p>2022/1/1(月)</p>
                </li>
                <li style="padding-left:20px;">
                    <p>10:10~11:00</p>
                </li>
            </ul>
        </div>
        <div class=" border-bottom mt-3">
            <ul class="list-group list-group-horizontal">
                <li style="padding-right:60px; white-space: nowrap;">
                    <h5>指導員</h5>
                </li>
                <li style="padding-left:60px; white-space: nowrap;">
                    <p>田中太郎</p>
                </li>
            </ul>
        </div>
        <div class="mt-3">
            <a class="btn btn-blue btn-info mx-auto d-block h-75" style="width:300px;" href="#">
                {{ __('予約をキャンセル') }}
            </a>
        </div>
    </div>
</form>
<form class="view-reserve" action="">
    <div class="container">
        <div class="border-bottom mt-1">
            <ul class="list-group list-group-horizontal">
                <li style="padding-right:10px;">
                    <h5>[2]</h5>
                </li>
                <li style="padding-left:30px;">
                    <p>2022/1/2(火)</p>
                </li>
                <li style="padding-left:20px;">
                    <p>11:10~12:00</p>
                </li>
            </ul>
        </div>
        <div class=" border-bottom mt-3">
            <ul class="list-group list-group-horizontal">
                <li style="padding-right:60px; white-space: nowrap;">
                    <h5>指導員</h5>
                </li>
                <li style="padding-left:60px; white-space: nowrap;">
                    <p>鈴木彩香</p>
                </li>
            </ul>
        </div>
        <div class="mt-3">
            <a class="btn btn-blue btn-info mx-auto d-block h-75" style="width:300px;" href="#">
                {{ __('予約をキャンセル') }}
            </a>
        </div>
    </div>
</form>
<div class="row mb-0 mt-5">
    <div class="col-md-6 offset-md-4 mx-auto d-block btn-back">
        <a class="btn btn-blue btn-info mx-auto d-block" href="{{ route('home') }}">
            {{ __('ホームへ戻る') }}
        </a>
    </div>
</div>
@endsection

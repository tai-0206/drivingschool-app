<?php
$title = '技能予約';
?>

@extends('layouts.app')

@section('content')
<form class="create-reserve row g-3 d-flex flex-column" action="" method="post">
    <section class="section mx-auto" style="width: 90%;">
        <div class="section__block section__block--scoped">
            <label class="form-label">日付を選択</label>
            <div class="">
                <input id="demo" class="fieldset__input js__datepicker rounded-pill form-select mx-auto" style="width: 90%;" type="text" placeholder="選択してください">
            </div>
        </div>
    </section>
    <div class="col-md-4 mx-auto" style="width:90%;">
        <label for="inputState" class="form-label">時間を選択</label>
        <select id="inputState" class="form-select rounded-pill mx-auto" style="width:90%;">
            <option hidden>選択してください</option>
            <option>9:10~10:00</option>
            <option>10:10~11:00</option>
            <option>11:10~12:00</option>
            <option>13:00~13:50</option>
            <option>14:00~14:50</option>
            <option>15:00~15:50</option>
        </select>
    </div>
    <div class="col-md-4 mx-auto" style="width:90%;">
        <label for="inputState" class="form-label">指導員を選択</label>
        <select id="inputState" class="form-select rounded-pill mx-auto" style="width:90%;">
            <option hidden>選択してください</option>
            <option>田中太郎</option>
            <option>山田太郎</option>
            <option>鈴木太郎</option>
            <option>山本太郎</option>
            <option>佐々木さくら</option>
            <option>鈴木彩香</option>
        </select>
    </div>
</form>
<div class="col-12 mt-5">
    <button type="submit" class="btn btn-blue btn-info mx-auto d-block">予約確認画面へ</button>
</div>
<div class="row mb-0 mt-3">
    <div class="col-md-6 offset-md-4 mx-auto d-block btn-back">
        <a class="btn btn-gray btn-info mx-auto d-block" href="{{ route('home') }}">
            {{ __('戻る') }}
        </a>
    </div>
</div>
@endsection

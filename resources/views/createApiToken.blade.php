@extends('layouts/app')

@section('title', 'API発行')

@section('cssFile')
<link rel="stylesheet" href="{{ asset('css/example.css') }}">
@endsection

@section('content')
<form action="/tokens" method="post">
    @csrf
    <div class="field">
        <label class="label">作品コード</label>
        <div class="control">
            <input class="input" type="text" name="project_code" placeholder="作品コード">
        </div>
        <div class="control">
            <div class="select">
                <select name="class_id">
                    <option value="IE1A">IE1A</option>
                    <option value="IE2A">I</option>
                    <option value="{{ Config::get('const.departments')['GRAPHIC'] }}">Graphic</option>
                </select>
            </div>
        </div>
        <div class="control">
            <input type="submit" class="button is-primary" value="Submit">
        </div>
    </div>
</form>
@endsection
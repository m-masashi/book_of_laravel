@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックス
@endsection

@section('content')
    <p>ここが本文のコンテンツです。。</p>
    @each('components.item', $data, 'item')
@endsection

@section('footer')
<p>copyright 2017 matsuda.</p>
@endsection
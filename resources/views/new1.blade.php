@extends('new')//katgib temlate master
@section('title')//bhala katketeb fblast lyield lifmaster page
ana title
@endsection
@section('head')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
@endsection
@section('name')
titre dakhel h1 lifmaster page

@endsection
@section('body')
<div class="card" style="width: 18rem;">
    <img src="https://quotefancy.com/media/wallpaper/1600x900/113129-Richard-Bach-Quote-A-soulmate-is-someone-who-has-locks-that-fit.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> title</h5>
      <p class="card-text"></p>

      <a href="" class="btn btn-primary">  quote </a>
      <h1>Data Count: {{ $count }}</h1>//jebna variiable weset lview dyalna olizwwin flaravel momkin dir fiha front bay haja bghity odir back biha
    </div>
  </div></
@endsection


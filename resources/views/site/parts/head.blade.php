<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$settings->description}}">
    <meta name="author" content="{{$settings->author}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
      <link rel="icon" type="image/png" href="{{$settings->favicon}}">
    <title>{{$settings->title}}</title>
    <link rel="shortcut icon" type="image/jpg" href="">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{asset('front/assets/css/templatemo-finance-business.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/owl.css')}}">

  </head>

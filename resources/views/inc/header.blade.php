<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="https://www.dxbapps.com/images/favicon/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .screen-center{
            margin: 0;
            position: absolute;
            top: 15%;
            -ms-transform: translateY(-40%);
            transform: translateY(-40%);
            
            -ms-transform: translateX(8%);
            transform: translateX(8%);
        }
        .error{
          color: red; 
          font-size:small;
        }
    </style>
    <title>{{env('APP_NAME')}}</title>
  </head>
  <body class=" bg-info">
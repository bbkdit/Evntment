<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">

  @section('meta-description')
    <meta name="description"
            content="">
  @show

  @section('meta-canonical')
  @show

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  @section('og-title')
    <meta property="og:title"
            content="">
  @show

  @section('og-url')
    <meta property="og:url" content="http://www.eventment.in">
  @show

  @section('og-image')
    <meta property="og:image" content="">
  @show

  @section('og-description')
    <meta property="og:description"
            content="">
  @show

  @section('page-title')
    <title>Eventment - Plan your occassion</title>
  @show
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{url('evmng/css/style.css')}}">
  <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

  @section('custom-head')
  @show

</head>
<body>
      <div class="container-wrap">
        @section('content')

        @show
      </div>
      @section('footer')
        @include('base.footer')
      @show

      @section('javascript')
      @show
  </body>
</html>
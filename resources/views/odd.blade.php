<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @include("elem.header")
    <ul>
      @foreach ($arr as $value)
          <li> {{$value}} </li>
       @endforeach
    </ul>
    @include("elem.footer")
  </body>
</html>

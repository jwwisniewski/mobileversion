<!DOCTYPE html>
<html>
  <head>
    <title>{!! $payload->title !!}</title>
    <meta name="keywords" content="{!! $payload->keywords !!}">
    <meta name="description" content="{!!$payload->description !!}">
  </head>
  <body>
    <nav>
      <ul>
        @foreach($links as $link)
          <li><a href="/{{ $link->url }}.html">{!! $link->nazwa !!}</a></li>
        @endforeach
      </ul>
    </nav>
    <div>
      @yield('content')
    </div>
  </body>
</html>

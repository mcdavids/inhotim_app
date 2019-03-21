@extends('layouts.app')

@section('content')
    <div class="row">
      <div class="medium-6 columns">
        <h4>Hotel Inhotim App</h4>
        <img class="thumbnail" src="images/attractions.jpg">
      </div>
      <div class="medium-6 large-5 columns">
        <p>Instituto Inhotim began to be conceived in the mid-1980s by Minas Gerais businessman Bernardo de Mello Paz.</p>
        <p>With time, this parcel of private land near Brumadinho, Brazil was transformed into a unique place, with one of the most significant collections of contemporary art in the world and a botanical collection containing rare species from every continent.</p>
        <p>Some of our retired contemporary art galleries have been developed into LEED certified hotels.</p>
        <p>To learn more about our hotel rooms, browse our website and download our information sheet.</p>
        <p>Click <button style='color: red'>HERE</button> for a good time!!!</p>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script type="text/javascript">
  var tmpAnimation = 0;
  $("button").click(function(){
    var element = $("img");
    tmpAnimation = tmpAnimation + 90;
    
    $({degrees: tmpAnimation - 90}).animate({degrees: tmpAnimation}, {
        duration: 2000,
        step: function(now) {
            element.css({
                transform: 'rotate(' + now + 'deg)'
            });
        }
    });
  });
</script>

@endsection
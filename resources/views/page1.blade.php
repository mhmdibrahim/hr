<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 1</title>
</head>
<body>
    <?php echo htmlspecialchars("<b>Hello</b>")?>
    {{"<b>hello again</b>"}}
    {!! "<b>hello again</b>"  !!}

    {{--
    multiple
    line
    comment
        --}}

    <hr>

    <h2>Welcome {{$name}}</h2>

    @if($name == "ahmed")
        Welcome {{$name}}
    @elseif($name == "sara")
        Bye  {{$name}}
    @else
        Hello {{$name}}
    @endif

    <br>
    {{($n1 > 50 ) ? "Pass":"Fail"}}
    <br>

    {{($n1 < 50 ) ?"Fail" : (($n1 < 65 ) ? "Pass" : (($n1 < 75 ) ? "good": (($n1 <85) ? "V.Good" : "Excellent")))}}


    <br>

    @for($i = 0 ; $i<5 ;$i++)
        {{$i}} <br>
    @endfor


    <hr>

    @foreach( $names as $client_name)
        {{$client_name}} <br>
    @endforeach

    <hr>

    @forelse( $names as $client_name)
        {{$client_name}} <br>
        @empty
        no clients
    @endforelse
   <hr>


    @while($n1++ < $s)

        <h1>Pass</h1>

    @endwhile

<hr>
@for ($i= 10 ; $i<100 ;$i+=10)

    @if($i == 50 )
        @break;
    @endif
    <h2>{{$i}}</h2>
@endfor
    <hr>
    @for ($i= 10 ; $i<100 ;$i+=10)

          @continue ($i==50)

        <h2>{{$i}}</h2>
    @endfor


    <hr>


    @foreach( [10,20,30,80,90,7] as $d)
        {{$loop->iteration}} off {{$loop->count}} remain {{$loop->remaining}} <br>
        {{$loop->index}}  <br>

    @endforeach
    <hr>
    @foreach([10,20,30,80,90,7] as $d)
       outer  {{$loop->depth}}
        @foreach($names as $client_name)
            inner  {{$loop->depth}}
            @foreach ([5,5,5,8,] as $g)
                inner  {{$loop->depth}}
            @endforeach
        @endforeach
    @endforeach
    <hr>

    @php
        $sum= 0;
    @endphp
    @foreach([10,20,30,80] as $d)
        @php
            $sum+= $d;
        @endphp
        {{--
                @foreach($names as $client_name)

                    {{var_dump($loop->parent)}}

                @endforeach
        --}}
    @endforeach
     <h1> Sum = {{$sum}}</h1>

<hr>

  <h1>Test = {{!empty($test) ? $test : ""}}</h1>
  <h1>Test = {{$test2 or ""}}</h1>
</body>
</html>

<?php

for($z = 1 ;$z<5 ;$z++)
{

    for($i = 1 ;$i<5 ;$i++)
        {

            for($j = 1 ;$j<5 ;$j++)
            {

                if($j == 2 ) continue 3 ;
                echo "z = $z  - i = $i - j = $j  <br>" ;
            }
        }
        }


?>

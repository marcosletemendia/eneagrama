@extends('layouts.plantilla')
@section('titulo')
   Test
@endsection

@section('principal')

   <div class="central">
      <h2>Test</h2>
      <div class="barratest">
        <img id="imgbarra" src="/img/barra7.jpg" alt="">
      </div>
      <form class="form" action="/pag9" method="post">
         {{ csrf_field() }}
         @foreach ($req->request as $re)
            <input type="hidden" name='pregunta{{$re}}' value={{$re}}>
         @endforeach
         @foreach ($preguntas as $pregunta)
           <div class="contenedor_pregunta">
             <div class="input">
               <input type="checkbox" name="pregunta{{$pregunta->id}}" value="{{$pregunta->id}}">
             </div>
             <div class="chek">
              <label for="pregunta{{$pregunta->id}}"> {{$pregunta->id .') '. $pregunta->pregunta}}</label>
             </div>
           </div>
         @endforeach
         <button class="botonf" type="submit" name="button">Siguiente</button>
      </form>
   </div>

@endsection

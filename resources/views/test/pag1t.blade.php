@extends('layouts.plantilla')
@section('titulo')
   Test
@endsection

@section('principal')

   <div class="central">
      <h2>Test</h2>
      <div class="warning">
              <p>Esta es la version abreviada del Test, si no esta seguro del resultado, le sugerimos hacer el <a href="/fulltest">TEST COMPLETO</a></p>
      </div>
      <div class="doing">
              <p> Elija las opciones que le representa</p>
      </div>
      <div class="barratest">
        <img id="imgbarra" src="/img/barra0.jpg" alt="">
      </div>
      <form class="form" action="/pag2t" method="post">
            {{ csrf_field() }}
         @foreach ($preguntas as $pregunta)
           <div class="contenedor_pregunta">
             <div class="input">
               <input type="checkbox" name="{{$pregunta->id}}" value={{$pregunta->id}}>
             </div>
             <div class="chek">
              <label for="{{$pregunta->id}}"> {{$pregunta->id .') '. $pregunta->pregunta}}</label>
             </div>
           </div>
         @endforeach
         <button type="submit" name="button">Siguiente</button>
      </form>

   </div>

@endsection

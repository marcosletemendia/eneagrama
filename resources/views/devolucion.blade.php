@extends('layouts.plantilla')
@section('titulo')
   Resultado Test de Personalidad
@endsection

@section('principal')

  <div class="central">
    <h2>Resultado</h2>
    <ul class="resultadoTest">
      <li> <a class="resultadoenea" href="/mirarme/eneatipo1">Eneatipo 1:</a> {{round($porcentajes[0], 0, PHP_ROUND_HALF_DOWN)}}%</li>
      <li> <a class="resultadoenea" href="/mirarme/eneatipo2">Eneatipo 2:</a> {{round($porcentajes[1], 0, PHP_ROUND_HALF_DOWN)}}%</li>
      <li> <a class="resultadoenea" href="/mirarme/eneatipo3">Eneatipo 3:</a> {{round($porcentajes[2], 0, PHP_ROUND_HALF_DOWN)}}%</li>
      <li> <a class="resultadoenea" href="/mirarme/eneatipo4">Eneatipo 4:</a> {{round($porcentajes[3], 0, PHP_ROUND_HALF_DOWN)}}%</li>
      <li> <a class="resultadoenea" href="/mirarme/eneatipo5">Eneatipo 5:</a> {{round($porcentajes[4], 0, PHP_ROUND_HALF_DOWN)}}%</li>
      <li> <a class="resultadoenea" href="/mirarme/eneatipo6">Eneatipo 6:</a> {{round($porcentajes[5], 0, PHP_ROUND_HALF_DOWN)}}%</li>
      <li> <a class="resultadoenea" href="/mirarme/eneatipo7">Eneatipo 7:</a> {{round($porcentajes[6], 0, PHP_ROUND_HALF_DOWN)}}%</li>
      <li> <a class="resultadoenea" href="/mirarme/eneatipo8">Eneatipo 8:</a> {{round($porcentajes[7], 0, PHP_ROUND_HALF_DOWN)}}%</li>
      <li> <a class="resultadoenea" href="/mirarme/eneatipo9">Eneatipo 9:</a> {{round($porcentajes[8], 0, PHP_ROUND_HALF_DOWN)}}%</li>
  </ul>

  <div class="">
    <img class="img-fluid" src="/img/eneagrama.png" usemap="#image_map">
  </div>

  </div>

@endsection

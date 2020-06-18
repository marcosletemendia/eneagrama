@extends('layouts.plantilla')
@section('titulo')
   Home
@endsection

@section('principal')

   <div class="central">
     <h2>Quiénes complementan al eneatipo</h2>
     <p>Al relacionarse con los ocho eneatipos restantes, queda configurada la siguiente
        vincularidad: cada eneatipo tiene dos eneatipos contiguos (alas); dos eneatipos
        primarios (brazos); dos eneatipos consonantes (ejes) y dos eneatipos ajenos
        (puntos ciegos), que señalan un sendero de crecimiento e integración.
     </p>

     <ul>
       <li> <a href="/mirar_al_mundo/alas">Alas</a> </li>
       <li> <a href="/mirar_al_mundo/brazos/">Brazos</a> </li>
       <li> <a href="/mirar_al_mundo/ciegos">Puntos ciegos</a> </li>
       <li> <a href="/mirar_al_mundo/ejes">Ejes</a> </li>
     </ul>
   </div>

@endsection

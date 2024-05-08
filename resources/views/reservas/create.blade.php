Formulario de creacion de reservas

<form action="{{url('/reservas')}}" method="post"enctype="mulripart/form-data" >
    @csrf
    @include('reservas.form')
    
    


    
    </form>
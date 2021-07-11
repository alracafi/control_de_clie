@extends('layouts.layout')
@section('content')
    
<div class="text-center">
    <h4>{{__('labels.area details')}}</h4>
</div>
<div class="col-xs-12 col-sm-12 col-md-12  text-center "style="border-style: solid ;border-radius:10px ;width: 50%;margin:auto">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div style="height: 1em" ></div>  
        <div class="text-left">
        <a class="btn btn-info" href="{{ route('localidades.index') }}">{{__('buttons.return')}}</a>
        </div>
    </div>   
    </div>
        <div style="height: 1em" ></div>      
     <div class="row text-center" style="display: flex; align-items: center; justify-content: center;">     
           
              
              {{----------------------------------------------------------------------------------------------------------------------}}
          <div class="form-group  align-self-center" style="width: 90%"> 
                <div class="col">        
                                  <input type="text" name="zona" class="form-control" value="{{$zona->zona}}" readonly> 
                </div>
                    <div style="height: 10px" ></div>
                <div class="col">        
                                 <textarea type="text"  name="descripcion"  class="form-control" style="height:180px" readonly>{{$zona->descripcion}}</textarea>      
                </div>                           
                      
            
            <div style="height: 10px" ></div>
                      
            <a class="btn btn-primary" href="{{ route('zonas.edit',$zona->id) }}">{{__('buttons.edit')}}</a>               
                      
            <div style="height: 12px" ></div>   
         </div> 
              
        
       
     </div> 
        </div>
@endsection
@extends('app')
<!-- {{$contactform_data['formcontent']}} -->
@section('main-content')
<?php 
// echo "<pre>";
$unserialize_formdata = unserialize($contactform_data['formcontent']);
// print_r($unserialize_formdata);
// echo "</pre>";
?>
<div class="container">
  <h2>{{$contactform_data->name}}</h2>
  <form class="form-horizontal" action="" method="">
      @php
      $num = 0;
      $num_radio = 0;
      $num_select = 0;
      @endphp    
  @foreach($unserialize_formdata['select_attr'] as $formdata)
      
      <!-- {{$num}} -->
      @if ($formdata == 'text') 
        <div class="form-group">
            <label class="control-label col-sm-2" for="">{{$unserialize_formdata['label_attr'][$num]}}:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="" placeholder="" name="" <?php if($unserialize_formdata['required_arr'][$num] == "on") { echo "required";}?>>
            </div>
       </div>
      @endif
      @if ($formdata == 'email') 
        <div class="form-group">
            <label class="control-label col-sm-2" for="">{{$unserialize_formdata['label_attr'][$num]}}:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="" placeholder="" name="" <?php if($unserialize_formdata['required_arr'][$num] == "on") { echo "required";}?>>
            </div>
       </div>
      @endif
      @if ($formdata == 'number') 
        <div class="form-group">
            <label class="control-label col-sm-2" for="">{{$unserialize_formdata['label_attr'][$num]}}:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="" placeholder="" name="" <?php if($unserialize_formdata['required_arr'][$num] == "on") { echo "required";}?>>
            </div>
       </div>
      @endif
      @if ($formdata == 'textbox') 
        <div class="form-group">
            <label class="control-label col-sm-2" for="">{{$unserialize_formdata['label_attr'][$num]}}:</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="5" id="comment" <?php if($unserialize_formdata['required_arr'][$num] == "on") { echo "required";}?>></textarea>
            </div>
       </div>
      @endif
      @if ($formdata == 'select') 
        <div class="form-group">
            <label class="control-label col-sm-2" for="">{{$unserialize_formdata['label_attr'][$num]}}:</label>
            <div class="col-sm-10">
                <select class="form-control"  name="select_attr[]" <?php if($unserialize_formdata['required_arr'][$num] == "on") { echo "required";}?>>
                <option>select value</option>  
                @if(!empty($unserialize_formdata['extra_values_select'][$num_select]))  
                   @php 
                    $explode_select = (explode(PHP_EOL,$unserialize_formdata['extra_values_select'][$num_select])); 
                    @endphp
                      @foreach($explode_select as $explode_select_value)
                <option>{{$explode_select_value}}</option>
                @endforeach
                @endif
				</select>
            </div>
       </div>
       @php
       $num_select++;
       @endphp
      @endif
      @if ($formdata == 'radio') 
        <div class="form-group">
            <label class="control-label col-sm-2" for="">{{$unserialize_formdata['label_attr'][$num]}}:</label>
            <div class="col-sm-10">   
                @if(!empty($unserialize_formdata['extra_values_radio'][$num_radio]))  
                   @php 
                    $explode_radio = (explode(PHP_EOL,$unserialize_formdata['extra_values_radio'][$num_radio])); 
                    @endphp
                      @foreach($explode_radio as $explode_radio_value)  
                    <div class="radio">
                       <label><input type="radio" name="optradio" checked>{{$explode_radio_value}}</label>
                    </div>
                     @endforeach
                @endif
            </div>
       </div>
       @php
       $num_radio++
       @endphp
      @endif
    @php 
    $num++;
    @endphp
    @endforeach
 
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>
@endsection

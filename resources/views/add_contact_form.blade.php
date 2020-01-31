@extends('app')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
@section('main-content')
<div class="container container-fluid">
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
<h1>Create Form</h1>
<form method="POST" action="formsave">
	<div class="row">
			<div class="col-sm-3">
				<label>Label : </label>
				<input type="text" class="form-control" name="label_attr[]" value="" />
			</div>
			<div class="col-sm-3 radio_select">
				<label for="sel1">Select list:</label>
				<select class="form-control sel_rgl"  name="select_attr[]" >
					<option>text</option>
					<option>email</option>
					<option>number</option>
					<option>radio</option>
					<option>textbox</option>
					<option>select</option>
				</select>
			</div>
			<div class="col-sm-3">
				<label>Required: </label>
				<div class="radio radio_cals">
					<label>
						<input type="radio" name="optradio1[]" value="required" checked>Required</label>
				</div>
				<div class="radio radio_cals">
					<label>
						<input type="radio" name="optradio1[]" value="non-required">non-required</label>
				</div>
			</div>
			<div class="col-sm-3">
				<a href="javascript:void(0);" class="add_button" title="Add field">
                    <img src="{{asset('images/add-icon.png')}}">
				</a>
			</div>
		</div>
	
	<div class="">
		<div class="col-sm-4">
            <label for="comment">Form name:</label>
			<input type="text" class="form-control" name="form_name" value="" />
			<label for="comment">Description:</label>
            <textarea class="form-control" name="description" rows="5" id="comment"></textarea>
            
            
        <button type="submit" class="btn btn-primary">form submit</button>

        </div>
</div>  
    @csrf
</form>
</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
	    var maxField = 10; //Input fields increment limitation
	    var addButton = $('.add_button'); //Add button selector
	    var wrapper = $('.container-fluid .row').last();
        //var wrapper = $("div p").last();
	    var fieldHTML = '<div class="row"><div class="col-sm-3"> <label>Label :</label> <input type="text" class="form-control" name="label_attr[]" value="" /></div><div class="col-sm-3 radio_select"> <label for="sel1">Select list:</label> <select class="form-control sel_rgl" name="select_attr[]" ><option>text</option><option>email</option><option>number</option><option>radio</option><option>textbox</option><option>select</option> </select></div><div class="col-sm-3"> <label>Required: </label><div class="radio radio_cals"> <label> <input type="radio" name="optradio[]" value="required" checked>Required</label></div><div class="radio radio_cals"> <label> <input type="radio" name="optradio[]" value="non-required">non-required</label></div></div><div class="col-sm-3"> <a href="javascript:void(0);" class="remove_button"><img src="{{asset('images/remove-icon.png')}}"></a></div></div>'; //New input field html 
	    var x = 1; //Initial field counter is 1
	    
	    //Once add button is clicked
	    $(addButton).click(function(){
               var wrapper = $('.container-fluid .row').last();
	        //Check maximum number of input fields
	        if(x < maxField){ 
	            x++; //Increment field counter
	            //$(wrapper).append(fieldHTML); //Add field html
                    
                    $(fieldHTML).insertAfter(wrapper);
                    var last_row = '';
                    var last_row = $('.container-fluid .row').last();
                   
                    var radio_name = "optradio"+x+"[]";
                   
                    $('.container-fluid .row').last().find('.radio_cals input').attr('name',  radio_name);
                    jQuery()

	        }
	    });
	    
	    //Once remove button is clicked
	    $(document).on('click', '.remove_button', function(e){
	        e.preventDefault();
            
	        $(this).parents('.row').remove(); //Remove field html
	        x--; //Decrement field counter
	    });
$(document).on('change', '.sel_rgl', function(){
        //$('.sel_rgl').on('change', function() {
            ///var dg = this;
            var pop_this = $(this);
            //alert("")
            var pop_this = $(pop_this).parents('.radio_select');
            $(pop_this).find('.textarea_select').remove();
            if(this.value == "select") {
           var fieldHTMLRadio = '<div class="textarea_select"><p class="extra-values-instruction">Please enter values here (one line per option)</p><textarea class="" name="extra_values_select[]" placeholder="Enter Input Label" ></textarea></div>';   
            $(pop_this).append(fieldHTMLRadio); 
            }
            if(this.value == "radio") {
           var fieldHTMLRadio = '<div class="textarea_select"><p class="">Please enter values here (one line per option)</p><textarea class="" name="extra_values_radio[]" placeholder="Enter Input Label" ></textarea></div>';   
            $(pop_this).append(fieldHTMLRadio); 
            }
        });
	});
</script>
@endsection
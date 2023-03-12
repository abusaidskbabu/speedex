@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'aboutus?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
				<div class="submitted-button">
					<button name="apply" class="tips btn btn-sm btn-default  "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
					<button name="save" class="tips btn btn-sm btn-default"  id="saved-button" title="{{ __('core.btn_back') }}" ><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button> 
				</div>	
			</div>
			<div class="col-md-6 text-right " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-default  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
			</div>
		</div>
	</div>	


	<div class="p-5">
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>		
		<div class="row">
	<div class="col-md-12">
						<fieldset><legend> About Us</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="About Section Image" class=" control-label col-md-4 text-left"> About Section Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="about_section_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="about_section_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["about_section_image"],"/uploads/images/about/") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="About Us" class=" control-label col-md-4 text-left"> About Us </label>
										<div class="col-md-6">
										  <textarea name='about_us' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['about_us'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mission Image" class=" control-label col-md-4 text-left"> Mission Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="mission_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="mission_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["mission_image"],"/uploads/images/about/") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Mission Vision" class=" control-label col-md-4 text-left"> Mission Vision </label>
										<div class="col-md-6">
										  <textarea name='mission_vision' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['mission_vision'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Country Covered" class=" control-label col-md-4 text-left"> Country Covered </label>
										<div class="col-md-6">
										  <input  type='text' name='country_covered' id='country_covered' value='{{ $row['country_covered'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Packages" class=" control-label col-md-4 text-left"> Packages </label>
										<div class="col-md-6">
										  <input  type='text' name='packages' id='packages' value='{{ $row['packages'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Happy Client" class=" control-label col-md-4 text-left"> Happy Client </label>
										<div class="col-md-6">
										  <input  type='text' name='happy_client' id='happy_client' value='{{ $row['happy_client'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Partners" class=" control-label col-md-4 text-left"> Partners </label>
										<div class="col-md-6">
										  <input  type='text' name='partners' id='partners' value='{{ $row['partners'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>
	
		</div>

		<input type="hidden" name="action_task" value="save" />
		
		</div>
	</div>		
	{!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("aboutus/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop
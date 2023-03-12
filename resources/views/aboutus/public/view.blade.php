<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('About Section Image', (isset($fields['about_section_image']['language'])? $fields['about_section_image']['language'] : array())) }}</td>
						<td>{{ $row->about_section_image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('About Us', (isset($fields['about_us']['language'])? $fields['about_us']['language'] : array())) }}</td>
						<td>{{ $row->about_us}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mission Image', (isset($fields['mission_image']['language'])? $fields['mission_image']['language'] : array())) }}</td>
						<td>{{ $row->mission_image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mission Vision', (isset($fields['mission_vision']['language'])? $fields['mission_vision']['language'] : array())) }}</td>
						<td>{{ $row->mission_vision}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Country Covered', (isset($fields['country_covered']['language'])? $fields['country_covered']['language'] : array())) }}</td>
						<td>{{ $row->country_covered}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Packages', (isset($fields['packages']['language'])? $fields['packages']['language'] : array())) }}</td>
						<td>{{ $row->packages}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Happy Client', (isset($fields['happy_client']['language'])? $fields['happy_client']['language'] : array())) }}</td>
						<td>{{ $row->happy_client}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Partners', (isset($fields['partners']['language'])? $fields['partners']['language'] : array())) }}</td>
						<td>{{ $row->partners}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	
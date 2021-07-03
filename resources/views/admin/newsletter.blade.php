@extends('admin._layout.master')



@section('contant')

<div id="content">
	<div class="row">
		<div class="col-md-12">
			
				<div class="panel">
					<div class="panel-heading"> <span class="panel-title"> <span class="glyphicon glyphicon-lock"></span> News Letter </span> </div>

@include('admin._layout.message')	
					<div class="panel-body pbn">
					<table class="table table-striped table-bordered table-hover" id="datatable">
						<thead>
							<tr>
								<th>SN</th>
								<th class="hidden-xs">Email</th>
								<th class="hidden-xs">Date</th>
							</tr>
						</thead>
						<tbody>
							@php $i=0; @endphp
					@foreach($data as $key)
					@php $i=$i+1; @endphp
							<tr>
								
								<td>{{$i}}</td>
								<td>{{$key->email}}</td>
								<td>{{$key->date}}</td>							
								
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>


					</div>
				</div>
			
		</div>
	</div>
	</section>
</div>


@endsection
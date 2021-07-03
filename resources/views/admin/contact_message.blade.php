@extends('admin._layout.master')



@section('contant')


<div id="content">
	<div class="row">

		<div class="col-md-12">




			<div class="panel panel-visible">
				<div class="panel-heading">
					<div class="panel-title hidden-xs"> <span class="glyphicon glyphicon-tasks"></span> Messges </div>
				</div>
				<div class="panel-body pbn">
					<table class="table table-striped table-bordered table-hover" id="datatable">
						<thead>
							<tr>
								<th>SN</th>
								<th class="hidden-xs">Name</th>
								<th>Email</th>
                                <th class="text-justify">Messages</th>
                                <th>Date</th>
							</tr>
						</thead>
						<tbody>
							@php $i=0; @endphp
							@foreach($data as $key)
							@php $i++; @endphp
							<tr>
								<td><span class="xedit">@php echo $i; @endphp</span></td>
								<td>{{$key->name}}</td>							
                                <td>{{$key->email}}</td>
                                <td>{{$key->message}}</td>
                                <td>{{$key->datetime}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>






		</div>
	</div>
	</section>
</div>


@endsection
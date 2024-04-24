
@extends('users.admin.layout.admin')
<!--Container-->
@section('content')
<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">{{$title}}</h4>			
		</div>		
	</div>

	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Price</th>
					<th scope="col">Image</th>
					<th scope="col">Description</th>
					<th scope="col">Price sale</th>
					<th scope="col">Quantity sold</th>
					<th scope="col">Active</th>

				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
					<td><span class="badge badge-primary">Primary</span></td>
					<td></td>
					<td></td>
					<td>
                        <a href="{{ route('admin.product.create') }}"><i class="fa-solid fa-square-plus"></i></a>
                        <a href="" class="btn-edit"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn-delete"><i class="fas fa-trash-alt"></i></a>
                    </td>
				</tr>
				
			</tbody>
		</table>
	</div>
</div>
<div class="row">
	<div class="col-sm-12 col-md-5">
	</div>
	<div class="col-sm-12 col-md-7">
		<div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
			<ul class="pagination">
				<li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#"
						aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link"><i
							class="ion-chevron-left"></i></a></li>
				<li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0"
						data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
				<li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2"
						tabindex="0" class="page-link">2</a></li>
				<li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#"
						aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link"><i
							class="ion-chevron-right"></i></a></li>
			</ul>
		</div>
	</div>
</div>
@endsection
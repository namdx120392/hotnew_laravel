@extends('layouts.admin')

@section('breadcrumbs_no_url')
	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
			<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-user"></i> Danh sách người dùng</h1>
		</div>
	</div>
@endsection

@section('content')
	<section id="widget-grid" class="">
		<div class="row">
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false">
					<header>
						<span class="widget-icon"> <i class="fa fa-table"></i> </span>
						<h2>Danh sách người dùng</h2>
					</header>

					<div>
						<!-- widget content -->
						<div class="widget-body no-padding">
							<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
								<thead>
									<tr>
										<th>ID</th>
										<th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>Họ tên</th>
										<th><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i> Điện thoại</th>
										<th>Địa chỉ</th>
										<th><i class="fa fa-fw fa-user txt-color-blue hidden-md hidden-sm hidden-xs"></i> Nhóm</th>
										<th><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Ngày sinh</th>
										<th>Thao tác</th>
									</tr>
								</thead>
								<tbody>
								@if(!empty($users))
									@foreach ( $users as $user )
										<tr>
											<td>{{$user->id}}</td>
											<td>{{$user->username}}</td>
											<td>{{$user->phone}}</td>
											<td>{{$user->address}}</td>
											<td>
												<?php if ( $user->admin == 1 ) : echo 'Admin';?>
												<?php elseif ( $user->admin == 0 ) : echo 'Member';?>
												<?php endif; ?>
											</td>
											<td>{{$user->birthday}}</td>
											<td role="gridcell" aria-describedby="jqgrid_act">
												<a href="{{route('user-edit', $user->id)}}" data-toggle="tooltip" title="Chỉnh sửa người dùng" class="btn btn-xs btn-default">
													<i class="fa fa-pencil"></i>
												</a>
												<a href="{{route('user-del', $user->id)}}" data-toggle="tooltip" title="Xóa người dùng" class="btn btn-xs btn-default">
													<i class="fa fa-times"></i>
												</a>
											</td>
										</tr>
									@endforeach
								@endif
								</tbody>
							</table>

							<div class="dt-toolbar-footer">
								<div class="col-sm-6 col-xs-12 hidden-xs">
									<div class="dataTables_info" id="datatable_fixed_column_info" role="status" aria-live="polite">
										Hiển thị <span class="txt-color-darken">
											@if($users->perPage() > $users->total()) :
											{{ $users->total() }}
											@else {{ $users->perPage() }}
											@endif
										</span> của
										<span class="text-primary">{{ $users->total() }}</span> người dùng
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="dataTables_paginate paging_simple_numbers" id="datatable_fixed_column_paginate">
										{!! $users->render() !!}
									</div>
								</div>
							</div>
						</div>
						<!-- end widget content -->
					</div>
				</div>
			</article>
		</div>
	</section>

@endsection

@section('content_js')
	<script type="text/javascript">
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		});
	</script>
@endsection
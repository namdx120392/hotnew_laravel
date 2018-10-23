@extends('layouts.admin')

@section('breadcrumbs_no_url')
	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
			<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-picture-o"></i> Danh sách banner</h1>
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
						<h2>Danh sách hình ảnh quảng cáo</h2>
					</header>

					<div>
						<!-- widget content -->
						<div class="widget-body no-padding">
							<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
								<thead>
									<tr>
										<th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>Hình ảnh</th>
										<th><i class="fa fa-fw fa-phone text-muted hidden-md hidden-sm hidden-xs"></i>Tiêu đề</th>
										<th>Mô tả</th>
										<th>Liên kết</th>
										<th><i class="fa fa-fw fa-user txt-color-blue hidden-md hidden-sm hidden-xs"></i>Tình trạng</th>
										<th>Thao tác</th>
									</tr>
								</thead>
								<tbody>
								@if(!empty($banners))
									@foreach ( $banners as $banner )
										<tr>
											<td class="mwimg">{!! Html::image($banner->path, $banner->title, array('class' =>'online img-responsive img-custom')) !!}</td>
											<td>{{$banner->title}}</td>
											<td>{{$banner->description}}</td>
											<td>
												@if(!empty($banner->url))
													<a target="_blank" href="{{$banner->url}}">Liên kết</a>
												@endif
											</td>
											<td>
												<?php if ( $banner->status == 1 ) : echo 'Hiển thị';?>
												<?php elseif ( $banner->status == 0 ) : echo 'Đã ẩn';?>
												<?php endif; ?>
											</td>
											<td role="gridcell" aria-describedby="jqgrid_act">
												<a href="{{route('banner-edit', $banner->id)}}" data-toggle="tooltip" title="Chỉnh sửa hình ảnh" class="btn btn-xs btn-default">
													<i class="fa fa-pencil"></i>
												</a>
												<a href="{{route('banner-del', $banner->id)}}" data-toggle="tooltip" title="Xóa hình ảnh" class="btn btn-xs btn-default">
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
											@if($banners->perPage() > $banners->total()) :
											{{ $banners->total() }}
											@else {{ $banners->perPage() }}
											@endif
										</span> của
										<span class="text-primary">{{ $banners->total() }}</span> hình ảnh
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="dataTables_paginate paging_simple_numbers" id="datatable_fixed_column_paginate">
										{!! $banners->render() !!}
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

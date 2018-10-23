@extends('layouts.admin')

@section('breadcrumbs_no_url')
	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
			<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-picture-o"></i> Thêm hình ảnh</h1>
		</div>
	</div>
@endsection

@section('content')

	<section id="widget-grid" class="">
		<div class="row">
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
					<div>
						<!-- widget content -->
						<div class="widget-body">
							{!! Form::open(array(
								'id' => 'submit_form',
								'class' => 'form-horizontal ',
								'method' => 'POST',
								'enctype' => "multipart/form-data",
								'url' => route('banner-add')
							)) !!}
								<fieldset>
									<legend> Nhập thông tin hình ảnh</legend>
									@if (count($errors) > 0)
										<div class="alert alert-danger">
											<ul>
											@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
											@endforeach
											</ul>
										</div>
									@endif
									<div class="form-group">
										<label class="col-md-2 control-label">Tiêu đề</label>
										<div class="col-md-10">
											<input class="form-control" name="title" placeholder="Tiêu đề" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Hình ảnh</label>
										<div class="col-md-10">
											<input class="form-control" name="image" placeholder="Hình ảnh" type="file">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Liên kết</label>
										<div class="col-md-10">
											<input name="url" class="form-control" placeholder="Liên kết" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Tình trạng</label>
										<div class="col-md-10">
											{!! Form::select('status',
												array(
													'null'	=> 'Chọn tình trạng cho hình ảnh',
												  	'0' => 'Không hiển thị',
												  	'1' => 'Hiển thị'
												),
												'',
												array( 'class' => 'form-control' )
											) !!}
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Mô tả</label>
										<div class="col-md-10">
											<textarea name="description" class="form-control" placeholder="Mô tả"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label"></label>
										<div class="col-md-10">
											<button type="button" class="btn btn-default" onclick="window.history.back();">Trở lại</button>
											<button type="submit" class="btn btn-primary">Lưu hình ảnh</button>
										</div>
									</div>
								</fieldset>
							{!! Form::close() !!}
						</div>
						<!-- end widget content -->
					</div>
				</div>
			</article>
		</div>
	</section>
@endsection

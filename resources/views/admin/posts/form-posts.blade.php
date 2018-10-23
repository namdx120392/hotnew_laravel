@extends('layouts.admin')

@section('breadcrumbs_no_url')
	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
			<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-th-list"></i> Thêm sản phẩm mới</h1>
		</div>
	</div>
@endsection

@section('content')
	<section id="widget-grid" class="">
		<div class="row">
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false">
				<div>
					<div class="widget-body">
						{!! Form::open(array(
							'id' => 'submit_form',
							'class' => 'form-horizontal ',
							'method' => 'POST',
							'enctype' => "multipart/form-data",
							'url'=> route('post-add')
						)) !!}
							<fieldset>
								<legend>Nhập thông tin sản phẩm</legend>
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
									<label class="col-md-2 control-label">Tiêu đề sản phẩm</label>
									<div class="col-md-10">
										{!! Form::text('title', '', array(
											'id' => 'title',
											'placeholder' => 'Tiêu đề sản phẩm',
											'class' => 'form-control'
										)) !!}
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">Nội dung tóm tắt</label>
									<div class="col-md-10">
										{!! Form::textarea('lead', '', array(
											'id' => 'lead',
											'placeholder' => 'Nội dung tóm tắt',
											'rows' => 3,
											'class' => 'form-control'
										)) !!}
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">Mô tả sản phẩm</label>
									<div class="col-md-10">
										{!! Form::textarea('description', '', array(
											'id' => 'description',
											'placeholder' => 'Mô tả sản phẩm',
											'rows' => 3,
											'class' => 'form-control'
										)) !!}
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">Ảnh thumbnail sản phẩm</label>
									<div class="col-md-10">
										<input name="thumbnail" class="form-control" type="file">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">Danh mục sản phẩm</label>
									<div class="col-md-10">
										{!! Form::select('category_id',
											$cate,
											'',
											array( 'class' => 'form-control' )
										) !!}
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Tình trạng</label>
									<div class="col-md-10">
										<div class="radio radio-primary radio-custom">
								            {{ Form::radio('status', 1, false, ['id' => 'active']) }}
								            <label for="active" class="radio-sinline">Hiển thị</label>
								        </div>
								        <div class="radio radio-primary radio-custom">
								            {{ Form::radio('status', 0, true, ['id' => 'inactive']) }}
								            <label for="inactive" class="radio-sinline">Không hiển thị</label>
								        </div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Nội dung sản phẩm</label>
									<div class="col-md-10">
										<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
										{!! Form::textarea('content', null, [
											'class' => 'ckeditor form-control',
											'id' => 'content_'
										]) !!}
					                   <script>
					                        CKEDITOR.replace( 'content_' , {
												customConfig	: '{{asset("/ckeditor/config-post.js")}}',

												filebrowserBrowseUrl: '{{ asset("/ckfinder/ckfinder.html") }}',
										        filebrowserImageBrowseUrl: '{{ asset("/ckfinder/ckfinder.html?type=Images") }}',
										        filebrowserFlashBrowseUrl: '{{ asset("/ckfinder/ckfinder.html?type=Flash") }}',
										        filebrowserUploadUrl: '{{ asset("/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files") }}',
										        filebrowserImageUploadUrl: '{{ asset("/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images") }}',
										        filebrowserFlashUploadUrl: '{{ asset("/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash") }}'
											});
					                    </script>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"></label>
									<div class="col-md-10">
										<button type="button" class="btn btn-default" onclick="window.history.back();">Trở lại</button>
										<button type="submit" class="btn btn-primary">Lưu sản phẩm</button>
									</div>
								</div>
							</fieldset>
						{!! Form::close() !!}
					</div>
					<!-- end widget content -->
				</div>
				<!-- end widget div -->
			</div>
			</article>
		</div>
	</section>
@endsection

@section('content_js')

{!! Html::script('js/make-url-friendly.js') !!}

@endsection



@extends('layouts.admin')
@section('breadcrumbs_no_url')
    <div class="row">
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
            <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Bảng điều khiển <span>> Bảng điều khiển của tôi</span>
            </h1>
        </div>
    </div>
@endsection

@section('content_js')
    {!! Html::script('js/dashboard.js') !!}
@endsection

@section('content')
    <section id="widget-grid" class="">
        <div class="row">
            <article class="col-sm-12 col-md-12 col-lg-6 sortable-grid ui-sortable">
                <div class="jarviswidget" id="wid-id-1" data-widget-togglebutton="false" data-widget-editbutton="false"
                     data-widget-fullscreenbutton="false" data-widget-colorbutton="false"
                     data-widget-deletebutton="false">
                    <header>
                        <span class="widget-icon"> <i class="glyphicon glyphicon-home txt-color-darken"></i> </span>
                        <h2></h2>
                    </header>
                    <div class="no-padding">
                        <div class="widget-body">
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in padding-10 no-padding-bottom" id="s2">
                                    <div class="padding-10">
                                        <div class="col-sm-4">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Đăng ký</h3>
                                                </div>
                                                <div class="panel-body"><h1 align="center">10</h1></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="panel panel-info">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Liên hệ</h3>
                                                </div>
                                                <div class="panel-body"><h1 align="center">100</h1></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="panel panel-warning">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Đặt hàng</h3>
                                                </div>
                                                <div class="panel-body"><h1 align="center">190</h1></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="jarviswidget" id="wid-id-1" data-widget-togglebutton="false" data-widget-editbutton="false"
                     data-widget-fullscreenbutton="false" data-widget-colorbutton="false"
                     data-widget-deletebutton="false">
                    <header>
                        <span class="widget-icon"> <i class="glyphicon glyphicon-stats txt-color-darken"></i> </span>
                        <h2>Lượt truy cập</h2>
                    </header>
                    <div class="no-padding">
                        <div class="widget-body">
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade active in padding-10 no-padding-bottom" id="s2">
                                    <div class="padding-10">
                                        <div id="statsChart" class="chart-large has-legend-unique"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-sm-12 col-md-12 col-lg-6 sortable-grid ui-sortable">
                <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-2" data-widget-colorbutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-calendar"></i> </span>
                        <h2>Sự kiện của tôi</h2>
                    </header>
                    <div>
                        <div class="jarviswidget-editbox">
                            <input class="form-control" type="text">
                        </div>
                        <div class="widget-body no-padding">
                            <div class="widget-body-toolbar">
                                <div id="calendar-buttons">
                                    <div class="btn-group">
                                        <a href="javascript:void(0)" class="btn btn-default btn-xs" id="btn-prev"><i
                                                    class="fa fa-chevron-left"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-default btn-xs" id="btn-next"><i
                                                    class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

@endsection

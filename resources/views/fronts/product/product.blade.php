
@extends('layouts.front')
@section('content')
    <div class="main">
        <div class="container">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="+1o+s4-16-1z+89"
     data-ad-client="ca-pub-4641044772779866"
     data-ad-slot="3644532785"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <section class="product-content clearfix">
                        <h1 class="title clearfix"><span>Sản phẩm</span></h1>
                        <div class="product-block product-grid row clearfix">
                            @if(empty($products) || count($products) < 1) 
                                <div id="nodata">
                                    <p style="color: red;">........Không có sản phẩm........</p>
                                </div>
                            @endif                            
                            <?php if(!empty($products)) { 
                                 foreach ($products as $k => $product) { ?>
                                   <div class="col-md-4 col-sm-4 col-xs-4 product-item-box">
                                       <div class="product-item product-resize fixheight"">
                                             <div class="image image-resize" >
                                                <a href="{{route('chi-tiet', ['id' => $product->id])}}" title="{{$product->title}}"> 
                                                    <img src="{{asset($product->thumbnail)}}" class="img-responsive" />
                                                </a>
                                                <span class="sale"></span>
                                            </div>
                                            <div class="right-block">
                                                <h2 class="name">
                                                    <a href="{{route('chi-tiet', ['id' => $product->id])}}" title="{{$product->title}}">{{$product->title}}</a>
                                                </h2>
                                                <div class="rating">
                                                    <div class="rating-1">
                                                        <span class="rating-img">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="shadow">
                                            </div>
                                        </div>
                                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="+1o+s4-16-1z+89"
     data-ad-client="ca-pub-4641044772779866"
     data-ad-slot="3644532785"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                                    </div>
                                <?php }
                            }?>
                        </div>
                        <div style="padding: 2%;"></div>
                        <div class="navigation">
                            <ul class="pagination">
                                <li>
                                    <?php echo $products->render(); ?>
                                </li>
                            </ul>
                        </div>
                        

                    </section>
                </div>
            </div>
        </div>
    </div>    
@endsection

@section('content_js')
@endsection
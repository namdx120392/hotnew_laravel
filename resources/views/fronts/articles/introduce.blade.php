@extends('layouts.front')
@section('content')
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
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
                    <?php echo $article->content;?>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content_js')
@endsection
@if ($breadcrumbs)
	<ol class="breadcrumb">
		@foreach ($breadcrumbs as $breadcrumb)
            @if (!$breadcrumb->last)
                <li><a href="{{{ $breadcrumb->url }}}">{{{ $breadcrumb->title }}}</a></li>
            @else
                <li>{{{ $breadcrumb->title }}}</li>
            @endif
        @endforeach
	</ol>
@endif
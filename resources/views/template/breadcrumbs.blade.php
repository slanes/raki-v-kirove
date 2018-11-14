@if (count($breadcrumbs))

    <div class="content">
		<ul class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li>
                	<a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                </li>
                <li class="outputSeparator">/</li>
            @else
                <li class="active">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    	</ul>
</div>

@endif
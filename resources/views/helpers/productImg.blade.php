@php
        if (empty($imgFile)) {
            $imgFile = 'no_home_icon.png';
        }
        if (null !== $attrs) {
            $attrs = 'class="' . $attrs . '"';
        }

@endphp
<img src="{{ asset('images/products/' . $imgFile) }}" {!! $attrs !!}>
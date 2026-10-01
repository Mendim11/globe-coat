@foreach($blogs as $blog)
    <div class="col-lg-4 col-md-12 mb-30">
        <a href="{{ route('blogs.show', $blog->slug) }}">
            <figure class="gallery-image">
                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                <figcaption>
                    <div class="icon"><img src="frontend/img/gallery/g-btn.png" alt="img" class="img"> </div>
                    <div class="text">
                        <span>{{ $blog->author }}</span>
                        <h4>{{ $blog->title }}</h4>
                    </div>
                </figcaption>
            </figure>
        </a>
    </div>
@endforeach

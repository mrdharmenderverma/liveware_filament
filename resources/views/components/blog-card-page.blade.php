<div class="col-md-6" data-aos="fade">
    <article class="blog-post">
        <div class="post-slider slider-sm rounded">
            @if ($blog->image != '')
                <img loading="lazy" decoding="async" src="{{ asset('storage/' . $blog->image) }}" alt="Post Thumbnail">
            @endif
        </div>
        <div class="pt-4">
            <p class="mb-3">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M, Y') }}</p>
            <h2 class="h4"><a class="text-black" href="blog-details.html">{{ $blog->title }}</a></h2>
            {{-- <p>Heading example Here is example of hedings. You can use this heading by
                following …</p> --}}
            <a href="blog-details.html" class="text-primary fw-bold"
                aria-label="Read the full article by clicking here">Read More</a>
        </div>
    </article>
</div>

<x-leyouts.main>
    <x-slot name="title">
        Blog
    </x-slot>
    <x-Page-Header>
        Blog
    </x-Page-Header>

    <div class="container-fluid py-5">
        <div class="container">
           <x-session_status.status>
           </x-session_status.status>
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Latest Blog</h6>
                    <h1 class="section-title mb-3">Latest Articles From Our Blog Post</h1>
                </div>  
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea
                        clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="position-relative mb-4">
                            <img class="img-fluid rounded w-100" src="/storage/{{ $post->photo }}" alt="">
                            <div class="blog-date">
                                <h4 class="font-weight-bold mb-n1">{{ $post->id }}</h4>
                                <small class="text-white text-uppercase">Jan</small>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            @foreach ( $post->tags as $tag )
                                
                            <a class="text-secondary text-uppercase font-weight-medium" >{{ $tag->name }}</a>
                            <span class="text-primary px-2">|</span>
                            
                            @endforeach
                          </div>
                        <div class="d-flex mb-2">
                            <a class='text-danger text-uppercase font-width-medium'>{{ $post->category->name }}</a>

                        </div>
                        <h5 class="font-weight-medium mb-2">{{ $post->title }}</h5>
                        <p class="mb-4">{{ $post->short_content }}</p>
                        @if (auth()->user()->hasRole('admin'))
                            
                        <a class="btn btn-sm btn-primary py-2" href="{{ route('posts.show', ['post' => $post->id]) }}">Read
                            More</a>
                            @endif
                    </div>
                @endforeach

                <div class="col-12">
                    {{ $posts->links()}}
                </div>
            </div>
        </div>
    </div>

</x-leyouts.main>

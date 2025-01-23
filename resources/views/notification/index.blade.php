<x-leyouts.main>
    <x-slot name="title">
        Notification
    </x-slot>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Latest Blog</h6>
                    <h1 class="section-title mb-3">Notifications</h1>
                </div>
            </div>

            @foreach ($notifications as $notification)
            
                    <div class="position-relative mb-4">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">New</h4>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <a class="text-secondary text-uppercase font-weight-medium">{{ $notification->data['created_at'] }}</a>
                    </div>
                    <div class="d-flex mb-2">
                        <a class='text-danger text-uppercase font-width-medium'>{{ 'a' }}</a>

                    </div>
                    <h5 class="font-weight-medium mb-2">{{ $notification->data['title'] }}</h5>
                    <p class="mb-4">{{'id'.$notification->data['id']}}</p>
                    <a class="btn btn-sm btn-primary py-2" href="{{ 'a'}}">Read
                        More</a>
             
            @endforeach

            <div class="col-12">
                {{ $notifications->links() }}
            </div>
        </div>
    </div>

</x-leyouts.main>




    <x-leyouts.main>
        <x-slot name="title">
            Edit
        </x-slot>
        <x-Page-Header>
            Edit 
        </x-Page-Header>
        <div class="flex">
            <div class="col-lg-4 mb-4 mt-5">
                <div class="contact-form">
                    <form action="{{route('posts.update',['post'=>$post->id])}}" method="POST" enctype="multipart/form-data" >
                       @method('PUT')
                        @csrf
                        <div class=" control-group mb-4">
                            <input type="text" class="form-control p-4" name="title"  value="{{$post->title}}" placeholder="Title"/>
                                @error('title')
                                <p class="help-block text-danger">{{ $message }}</p>
                             
                            @enderror
                        </div>
                        <div class=" control-group mb-4">
                            <input type="file" class="form-control p-4" name="photo"   placeholder="photo"/>
                                 @error('photo')
                                 <p class="help-block text-danger">{{ $message }}</p>
                              
                             @enderror
                                
                        </div>
                        <div class="control-group mb-4">
                            <input type="text" class="form-control p-4" name="short_content" placeholder="short_content" />
                            @error('short_content')
                                <p class="help-block text-danger">{{ $message }}</p>
                             
                            @enderror
                        </div>
                        <div class="control-group mb-4">
                            <textarea class="form-control p-4" rows="6" name="content" placeholder="Message" 
                                data-validation-required-message="Please enter your message">{{$post->content}}</textarea>
                                @error('content')
                                <p class="help-block text-danger">{{ $message }}</p>
                             
                            @enderror
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-leyouts.main>
    

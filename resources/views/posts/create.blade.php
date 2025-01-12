<x-leyouts.main>
    <x-slot name="title">
        ADD
    </x-slot>
    <x-Page-Header>
        ADD
    </x-Page-Header>
    <div class="flex">
        <div class="col-lg-4 mb-4 mt-5">
            <div class="contact-form">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class=" control-group mb-4">
                        <input type="text" class="form-control p-4" name="title" id="title"
                            value="{{ old('title') }}" placeholder="Title" />

                    </div>

                    <div class=" control-group mb-4">
                        <select name='category_id'>
                            @foreach ($categories as $category)
                                <option value='{{ $category->id }}'>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class=" control-group mb-4">
                            <select name='tags[]' multiple>
                                @foreach ($tags as $tag)
                                    <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
                                @endforeach
                            </select>


                        </div>
                        <div class=" control-group mb-4">
                            <input type="file" class="form-control p-4" name="photo" id="title"
                                placeholder="photo" />
                            @error('photo')
                                <p class="help-block text-danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="control-group mb-4">
                            <input type="text" class="form-control p-4" name="short_content"
                                value="{{ old('short_content') }}" placeholder="short_content"
                                data-validation-required-message="Please enter a subject" />
                            @error('short_content')
                                <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="control-group mb-4">
                            <textarea class="form-control p-4" rows="6" name="content" placeholder="Message"
                                data-validation-required-message="Please enter your message">{{ old('content') }}</textarea>
                            @error('content')
                                <p class="help-block text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit"
                                id="sendMessageButton">Send
                                Message</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</x-leyouts.main>

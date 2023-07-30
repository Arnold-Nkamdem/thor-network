<!-- Update post modal -->
<div id="updatePost-{{ $post->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST" action="{{ route('posts.update', $post->id) }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div>
                        <textarea name="text_post" id="text_post"  class="mt-1 block w-full" cols="30" rows="10" autofocus>
                            {{ $post->text_post }}
                        </textarea>
                        @error('text_post')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label class="block mt-2" for="image_post">Import image
                            <span class="sr-only">Add image</span>
                            <input type="file" id="image_post" name="image_post" class="block w-full text-sm text-slate-500
                                file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-violet-50 file:text-violet-700
                                hover:file:bg-violet-100
                            "/>
                        </label>
                        <div class="shrink-0 my-2">
                            <img id="image_preview" class="h-64 w-128 object-cover rounded-md" src="{{ Storage::url($post->image_post) }}" alt="Image preview" />
                        </div>
                        @error('image_post')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

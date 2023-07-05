<!DOCTYPE html>
<html>
   
   <head>
  <!-- Insert the blade containing the TinyMCE configuration and source script -->
  <x-head.tinymce-config/>
    </head>
    
    <body>
        
        <x-app-layout>
            <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                <form method="POST" action="{{ route('posts.update', $post) }}">
                    @csrf
                    @method('patch')
                    <textarea
                    id="myeditorinstance"
                        name="body"
                        class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                    >{{ old('body', $post->body) }}</textarea>
                    <x-input-error :messages="$errors->get('body')" class="mt-2" />
                    <div class="mt-4 space-x-2">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                        <x-secondary-button>
                        <a href="{{ route('posts.index') }}">{{ __('Cancel') }}</a>
                        </x-secondary-button>
                    </div>
                </form>
            </div>
        </x-app-layout>
    </body>
</html>
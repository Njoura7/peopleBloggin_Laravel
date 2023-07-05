<head>
  <!-- Insert the blade containing the TinyMCE configuration and source script -->
  <x-head.tinymce-config/>
    </head>

<form method="POST" action="{{ route('posts.store') }}">
@csrf
<textarea name="title"
          class="w-full h-20 px-3 py-2 mb-4 text-base text-gray-700 placeholder-gray-400 border rounded-lg focus:outline-none focus:shadow-outline resize-none"
          placeholder="{{ __('Give your article a title!!') }}"
          style="overflow-y: hidden">{{ old('title') }}
</textarea>
<x-input-error :messages="$errors->get('title')" class="mt-2" />
   <textarea  id="myeditorinstance"  name="body"
                placeholder="{{ __('Write your thoughts!!') }}">

         @sanitize (old('body') ) 
   </textarea>
   <x-input-error :messages="$errors->get('body')" class="mt-2" />



   <x-primary-button class="mt-4">{{ __('Post') }}</x-primary-button>
 </form>


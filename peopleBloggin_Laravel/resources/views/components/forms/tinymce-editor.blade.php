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

     <!-- Add a hidden input field to hold the content of the editor -->
  <input type="hidden" name="body_content" id="body_content">
  <div id="display"></div>

<!-- Add an event listener to the form that sets the value of the hidden input field to the content of the editor -->
<script>
  const form = document.querySelector('form');
  const editor = tinymce.get('myeditorinstance');
  form.addEventListener('submit', function() {
    const content = editor.getContent();
    document.querySelector('#body_content').value = content;

    // Retrieve the hidden input field value
    const hiddenInput = document.querySelector('#body_content');
    const value = hiddenInput.value;

    // Update the display element with the value
    const displayElement = document.querySelector('#display');
    displayElement.textContent = value;

    
  });
</script>
   <x-primary-button class="mt-4">{{ __('Post') }}</x-primary-button>
 </form>

 
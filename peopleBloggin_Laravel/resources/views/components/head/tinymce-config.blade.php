 <script src="https://cdn.tiny.cloud/1/2m7v9w7zr6u0xmhjnskcwb25c5anu99gbsrx7sp0u0z9eciv/tinymce/6/tinymce.min.js"  referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea#myeditorinstance',
    width: '100%',
    autoresize_min_height: 200,
      autoresize_max_height: 800,
    plugins:[
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'prewiew', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media', 
        'table', 'emoticons', 'template', 'codesample'
    ],
    toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify |' + 
    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
    'forecolor backcolor emoticons',
    menu: {
        favs: {title: 'menu', items: 'code visualaid | searchreplace | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table',
    content_style: 'body{font-family:Helvetica,Arial,sans-serif; font-size:16px}'
    });
  </script> 
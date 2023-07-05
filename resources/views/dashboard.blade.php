<!DOCTYPE html>
<html>
   
        
   
    <head>
  <!-- Insert the blade containing the TinyMCE configuration and source script -->
  <x-head.tinymce-config/>
    </head>
    <body>
        
        <x-app-layout>
            <x-slot name="header">
             
              
            </x-slot>
        
            <div class="py-12">
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            
                               <!-- Insert the blade containing the TinyMCE placeholder HTML element & the title placeholder -->
                         <x-forms.tinymce-editor/>
         
                        
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </body>
</html>

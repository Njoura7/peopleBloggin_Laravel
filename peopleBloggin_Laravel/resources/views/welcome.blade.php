        <x-guest-layout>

      @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-8 text-right">
    @auth
    <a href="{{ url('/dashboard') }}" class="font-semibold text-white bg-blue-500 py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline focus:outline-2 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Dashboard</a>
      @else
  <a href="{{ route('login') }}" class=" font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm">
  <x-secondary-button>
    Log in
    </x-secondary-button>
    </a>

    @if (Route::has('register'))
       
    <a href="{{ route('register') }}" class="  font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-600 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm ">
    <x-primary-button class=" relative ml-2" >
    Register
    <span class="absolute top-0 right-0 -mr-1 -mt-1 w-3 h-3 rounded-full bg-yellow-500 animate-ping"></span>
    <span class="absolute top-0 right-0 -mr-1 -mt-1 w-3 h-3 rounded-full bg-yellow-500"></span>
    
    </x-primary-button>
    </a>

    @endif
  @endauth
  
    @endif
       </div>
 
            
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="text-center ">
                            <h3 class="mt-5 text-xl font-semibold text-gray-900 dark:text-white">Link Card 1</h3>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan urna quis massa ultricies consequat. In quis massa eget leo efficitur fringilla.</p>
                            <x-primary-button class="my-4">Click me!</x-primary-button>
                            
                        </div>
                    </div>

                    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="text-center">
                            <h3 class="mt-2 mb-2 text-xl font-semibold text-gray-900 dark:text-white">Link Card 2</h3>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla accumsan urn</p>
                         </div>
                    </div>
                  
                </div>
            
            
        </x-guest-layout> 
  

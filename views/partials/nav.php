<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-14 w-14" src="public/images/shop-icon.png" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="<?php echo urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>

              <a href="/about" class="<?php echo urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>

              <a href="/contact" class="<?php echo urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>

            </div>
          </div>
        </div>
        
        
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="<?php echo urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Home</a>

        <a href="/about" class="<?php echo urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> block px-3 py-2 rounded-md text-base font-medium">About</a>

        <a href="/contact" class="<?php echo urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300'; ?> block px-3 py-2 rounded-md text-base font-medium">Contact</a>

      </div>
      
    </div>
  </nav>
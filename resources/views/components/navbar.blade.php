      {{-- navbar --}}
      <div class="w-full sticky top-0 sm:w-full sm:sticky sm:top-0">
          <nav class="bg-biru-utama-0 h-24 text-white flex items-center justify-evenly shadow-md drop-shadow-lg">
              <a class="font-semibold text-3xl mx-5" href="/">MitsukriPedia</a>
              <ul class="flex justify-around w-1/3">
                  <li
                      class="text-base cursor-pointer p-1 hover:text-gray-100 {{ request()->is('books') ? 'underline' : '' }}">
                      <a href="/books">Books</a>
                  </li>
                  <li
                      class="text-base cursor-pointer p-1 hover:text-gray-100 {{ request()->is('gadget') ? 'underline' : '' }}">
                      <a href="/gadget">Gadget</a>
                  </li>
                  <li
                      class="text-base cursor-pointer p-1 hover:text-gray-100 {{ request()->is('diamond') ? 'underline' : '' }}">
                      <a href="/diamond">Diamond</a>
                  </li>
              </ul>
              <div class="relative">
                  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none drop-shadow-md">
                      <i data-feather="search" class="stroke-gray-400"></i>
                  </div>

                  <input type="search" id="default-search"
                      class="block w-80 py-3 px-5 ps-12 text-sm text-gray-900 border border-gray-300 rounded-3xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 shadow-md outline-none"
                      placeholder="Search Products..." autocomplete="off" />
              </div>

              <button class="bg-gray-50 p-3 rounded-full shadow-md focus:ring-gray-300 focus:ring-2">
                  <i data-feather="shopping-cart" class="fill-blue-600 stroke-blue-600"></i>
              </button>
              <button id="dropdownToggle"
                  class="bg-gray-50 p-3 rounded-full shadow-md focus:ring-gray-300 focus:ring-2">
                  <i data-feather="user" class="fill-blue-600 stroke-blue-600"></i>
              </button>

              <div id="dropdownMenu" class="absolute right-8 mt-40 w-28 bg-white rounded-md shadow-md hidden">
                  <ul class="">
                      <li class="flex items-center hover:bg-gray-100 mb-2 rounded-t-md">
                          <a href="/login" class="px-3 py-2 text-gray-800 text-sm font-semibold">Log in</a>
                          <i data-feather="log-in" class="stroke-blue-400 w-5 ml-3"></i>
                      </li>
                      <li class="flex items-center hover:bg-gray-200 mt-2 rounded-b-md">
                          <a href="/daftar" class="px-3 py-2 text-gray-800 text-sm font-semibold">Sign Up</a>
                          <i data-feather="user-plus" class="stroke-blue-400 w-5 ml-1"></i>
                      </li>
                  </ul>
              </div>

          </nav>
      </div>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @livewireStyles
        @vite(['resources/js/app.js', 'resources/css/app.css'])

    </head>
    <body class="bg-[#F0E8E8]">
    <!----------------------------- SIDEBAR ---------------------------------->
        <aside x-data="{ openSidebar: true }" class="sidebar" :class="{ 'hidden': !openSidebar, 'block': openSidebar }">
            <div class="p-3 mt-10">
                <div class="flex items-center justify-center">
                    <img class="w-24 h-24 rounded-full" alt="image" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" />
                </div>
                    <div class="mt-4 ml-2 text-[20px] font-bold text-center text-white">Jasmine B</div>
                    <p class="mt-2 ml-2 text-[12px] text-center font-thin text-white">DEVELOPER</p>
                    </div>
            </div>
            <hr class="mt-3 border-white" />
            <ul class="ml-4 mr-4">
            <ul>
                <li>
                    <a href="{{route('index')}}" class="flex items-center gap-3 px-2 py-3 mt-5 font-semibold text-white rounded-lg hover:bg-white hover:text-red-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z" clip-rule="evenodd" />
                          </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{route('user-management')}}" class="flex items-center w-full gap-3 px-2 py-3 mt-5 font-semibold text-white rounded-lg hover:bg-white hover:text-red-900">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                        </svg>
                        User Management</a>

                </li>
                <li>
                    <a href="{{route('task')}}" class="flex items-center w-full gap-3 px-2 py-3 mt-5 font-semibold text-white rounded-lg hover:bg-white hover:text-red-900">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path d="M11.644 1.59a.75.75 0 0 1 .712 0l9.75 5.25a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0l-9.75-5.25a.75.75 0 0 1 0-1.32l9.75-5.25Z" />
                            <path d="m3.265 10.602 7.668 4.129a2.25 2.25 0 0 0 2.134 0l7.668-4.13 1.37.739a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.71 0l-9.75-5.25a.75.75 0 0 1 0-1.32l1.37-.738Z" />
                            <path d="m10.933 19.231-7.668-4.13-1.37.739a.75.75 0 0 0 0 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 0 0 0-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 0 1-2.134-.001Z" />
                        </svg>
                            Task Management</a>
                </li>
                <li><a href="{{route('log')}}" class="flex items-center w-full gap-3 px-2 py-3 mt-5 font-semibold text-white rounded-lg hover:bg-white hover:text-red-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M19.5 21a3 3 0 0 0 3-3v-4.5a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3V18a3 3 0 0 0 3 3h15ZM1.5 10.146V6a3 3 0 0 1 3-3h5.379a2.25 2.25 0 0 1 1.59.659l2.122 2.121c.14.141.331.22.53.22H19.5a3 3 0 0 1 3 3v1.146A4.483 4.483 0 0 0 19.5 9h-15a4.483 4.483 0 0 0-3 1.146Z" />
                      </svg>
                    Log Records</a>
                </li>
                <li><a href="{{route('act-monitor')}}" class="flex items-center w-full gap-3 px-2 py-3 mt-5 font-semibold text-white rounded-lg hover:bg-white hover:text-red-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd" d="M2.625 6.75a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875 0A.75.75 0 0 1 8.25 6h12a.75.75 0 0 1 0 1.5h-12a.75.75 0 0 1-.75-.75ZM2.625 12a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0ZM7.5 12a.75.75 0 0 1 .75-.75h12a.75.75 0 0 1 0 1.5h-12A.75.75 0 0 1 7.5 12Zm-4.875 5.25a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875 0a.75.75 0 0 1 .75-.75h12a.75.75 0 0 1 0 1.5h-12a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                      </svg>
                    Activity Monitoring</a></li>
            </ul>
        </aside>
        <!----------------------------- NAV BAR  ---------------------------------->
       <nav x-data="showMenu" class="fixed z-10 top-0 left-3 right-0 h-auto gap-1 pt-0 pb-0 pl-64 pr-5 bg-[#FFFFFF] shadow-md">


            <div class="flex items-center justify-between gap-4 py-3">
        <!--- MENU ICON --->
            <div @click="openSidebar = !openSidebar" class="text-red-900 cursor-pointer">
                    <svg class="w-10 h-10 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/>
                      </svg>
                </div>
        <!--- SEARCH BAR --->
                {{-- <div class="relative w-full">
                    <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>
                    <input type="text" id="simple-search" class="bg-gray-50  w-72 border-2 border-red-900 text-gray-900 text-sm rounded-lg block ps-10 p-2.5" placeholder="Search..." required />
                </div> --}}
        <!--- MESSAGE --->
            <div class="flex items-center gap-2">
                <div @click="toggleOpenMessage" class="flex items-center">
                    <button type="button" class="relative p-1 text-white">
                        <div class="absolute right-1">
                            <div class="absolute inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-800 border-2 border-white rounded-full -top-2 -end-2">8</div>
                        </div>
                            <svg  class="text-black w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8c0 .6.4 1 1 1h1v2a1 1 0 0 0 1.7.7L9.4 13H15c.6 0 1-.4 1-1V4c0-.6-.4-1-1-1H4Z" clip-rule="evenodd"/>
                          </svg>
                        </div>
                    </button>

        <!--- MESSAGE CONTENT --->
                    <div @click.outside="openMessage=false" x-transition x-show="openMessage" class="absolute h-auto bg-white rounded-lg shadow-sm shadow-black w-80 right-32 top-12">
                        <div class="flex items-center justify-between bg-red-800 rounded-t-lg">
                            <div class="block px-4 py-2 font-semibold text-left text-white">
                             Messages
                            </div>
                            <div class="pr-3">
                            <svg class="w-6 h-6 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="4" d="M6 12h0m6 0h0m6 0h0"/>
                              </svg>
                            </div>
                        </div>
                        <form class="max-w-md mx-4 mt-3">
                            <label for="default-search" class="mb-2 text-sm font-medium text-red-900 sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                    <svg class="w-4 h-4 text-red-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>

                                <input type="search" id="default-search" class="block w-full p-1 text-sm bg-gray-200 border border-red-800 rounded-lg ps-10" placeholder="Search Messages" required />

                            </div>
                        </form>
                        <li class="flex items-center justify-between p-2 mt-2 transition hover:bg-gray-200">
                            <div class="flex ml-2"> <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" width="40" height="40" class="rounded-full">
                                <div class="flex flex-col ml-2"> <span class="font-bold text-red-800 text-[14px]">Jasmine B</span> <span class="w-32 text-[12px] text-gray-400 truncate">Message</span>
                                </div>
                            </div>
                            <div class="flex flex-col items-center"> <span class="text-gray-400 mb-3 mr-3 text-[12px]">11:26</span>
                            </div>
                        </li>
                        <li class="flex items-center justify-between p-2 mt-2 transition hover:bg-gray-200">
                            <div class="flex ml-2"> <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" width="40" height="40" class="rounded-full">
                                <div class="flex flex-col ml-2"> <span class="font-bold text-red-800 text-[14px]">Jasmine B</span> <span class="w-32 text-[12px] text-gray-400 truncate">Message</span>
                                </div>
                            </div>
                            <div class="flex flex-col items-center"> <span class="text-gray-400 mb-3 mr-3 text-[12px]">11:26</span>
                            </div>
                        </li>
                        <li class="flex items-center justify-between p-2 mt-2 transition hover:bg-gray-200">
                            <div class="flex ml-2"> <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" width="40" height="40" class="rounded-full">
                                <div class="flex flex-col ml-2"> <span class="font-bold text-red-800 text-[14px]">Jasmine B</span> <span class="w-32 text-[12px] text-gray-400 truncate">Message</span>
                                </div>
                            </div>
                            <div class="flex flex-col items-center"> <span class="text-gray-400 mb-3 mr-3 text-[12px]">1 hour ago</span>
                            </div>
                        </li>
                        <li class="flex items-center justify-between p-2 mt-2 transition hover:bg-gray-200">
                            <div class="flex ml-2"> <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" width="40" height="40" class="rounded-full">
                                <div class="flex flex-col ml-2"> <span class="font-bold text-red-800 text-[14px]">Jasmine B</span> <span class="w-32 text-[12px] text-gray-400 truncate">Message</span>
                                </div>
                            </div>
                            <div class="flex flex-col items-center"> <span class="text-gray-400 mb-3 mr-3 text-[12px]">4 hours ago</span>
                            </div>
                        </li>
                        <li class="flex items-center justify-between p-2 mt-2 transition hover:bg-gray-200">
                            <div class="flex ml-2"> <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" width="40" height="40" class="rounded-full">
                                <div class="flex flex-col ml-2"> <span class="font-bold text-red-800 text-[14px]">Jasmine B</span> <span class="w-32 text-[12px] text-gray-400 truncate">Message</span>
                                </div>
                            </div>
                            <div class="flex flex-col items-center"> <span class="text-gray-400 mb-3 mr-3 text-[12px]">5 hours ago</span>
                            </div>
                        </li>
                        <a href="#" class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                            <div class="inline-flex items-center text-sm font-bold text-red-800">
                                View all Messages
                            </div>
                          </a>

                    </div>
        <!--- NOTIFICATION --->
                        <button @click="toggleOpenNotification" type="button" class="relative p-2 text-white">
                            <div class="absolute right-1">
                                <div class="relative flex w-2 h-2 ">
                                    <span class="absolute inline-flex w-full h-full bg-red-800 rounded-full opacity-75 animate-ping"></span>
                                    <span class="relative inline-flex w-2 h-2 bg-red-800 rounded-full"></span>
                                </div>
                            </div>
                            <svg class="text-black w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.1 12.6v-1.8A5.4 5.4 0 0 0 13 5.6V3a1 1 0 0 0-2 0v2.4a5.4 5.4 0 0 0-4 5.5v1.8c0 2.4-1.9 3-1.9 4.2 0 .6 0 1.2.5 1.2h13c.5 0 .5-.6.5-1.2 0-1.2-1.9-1.8-1.9-4.2ZM8.8 19a3.5 3.5 0 0 0 6.4 0H8.8Z"/>
                              </svg>
                        </button>
        <!--- NOTIFICATION CONTENT --->
                        <div @click.outside="openNotification=false" x-transition x-show="openNotification" class="absolute w-64 h-auto bg-white rounded-lg shadow-sm right-20 top-12 shadow-black ">
                            <div class="block px-4 py-2 font-semibold text-left text-white bg-red-800 rounded-t-lg ">
                                Notifications
                            </div>
            <!-- 1 -->
                            <div class="divide-y divide-gray-100">
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 ">
                                  <div class="flex-shrink-0">
                                    <img class="rounded-full w-11 h-11" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="">
                                    <div class="absolute flex items-center justify-center w-5 h-5 -mt-5 bg-red-900 border border-white rounded-full ms-6 dark:border-gray-800">
                                      <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                        <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                        <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="w-full ps-3">
                                      <div class="text-gray-800 text-sm mb-1.5 dark:text-gray-800">You have a notification</div>
                                      <div class="text-xs text-red-600">a few moments ago</div>
                                  </div>
                                </a>
                              </div>
            <!-- 2 -->
                              <div class="divide-y divide-gray-100 dark:divide-gray-700">
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 ">
                                  <div class="flex-shrink-0">
                                    <img class="rounded-full w-11 h-11" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="">
                                    <div class="absolute flex items-center justify-center w-5 h-5 -mt-5 bg-red-900 border border-white rounded-full ms-6 dark:border-gray-800">
                                      <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                        <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                        <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="w-full ps-3">
                                      <div class="text-gray-800 text-sm mb-1.5 dark:text-gray-800">You have a notification</div>
                                      <div class="text-xs text-red-600">a few moments ago</div>
                                  </div>
                                </a>
                              </div>
            <!-- 3 -->
                              <div class="divide-y divide-gray-100 dark:divide-gray-700">
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 ">
                                  <div class="flex-shrink-0">
                                    <img class="rounded-full w-11 h-11" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="">
                                    <div class="absolute flex items-center justify-center w-5 h-5 -mt-5 bg-red-900 border border-white rounded-full ms-6 dark:border-gray-800">
                                      <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                        <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                        <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="w-full ps-3">
                                      <div class="text-gray-800 text-sm mb-1.5 dark:text-gray-800">You have a notification</div>
                                      <div class="text-xs text-red-600">a few moments ago</div>
                                  </div>
                                </a>
                              </div>
            <!-- 4 -->
                              <div class="divide-y divide-gray-100 dark:divide-gray-700">
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100 ">
                                  <div class="flex-shrink-0">
                                    <img class="rounded-full w-11 h-11" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="">
                                    <div class="absolute flex items-center justify-center w-5 h-5 -mt-5 bg-red-900 border border-white rounded-full ms-6 dark:border-gray-800">
                                      <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                        <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                        <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
                                      </svg>
                                    </div>
                                  </div>
                                  <div class="w-full ps-3">
                                      <div class="text-gray-800 text-sm mb-1.5 dark:text-gray-800">You have a notification</div>
                                      <div class="text-xs text-red-600">a few moments ago</div>
                                  </div>
                                </a>
                              </div>
                              <a href="#" class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                                <div class="inline-flex items-center">
                                  <svg class="w-4 h-4 text-red-800 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                    <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                                  </svg>
                                  <div class="inline-flex items-center text-sm font-bold text-red-800">
                                    View all
                                  </div>
                                </div>
                              </a>
                        </div>

            <!--- PROFILE --->

                    <button  @click="toggle" class="block w-10 h-10 overflow-hidden rounded-full focus:outline-none">
                        <img class="object-cover w-full h-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-2.png" alt="avatar">
                    </button>
            <!--- PROFILE CONTENT --->

                    <div @click.outside="open=false" x-transition x-show="open" class="absolute h-auto bg-white rounded-lg w-36 right-3 top-16 ">
                        <div class="flex flex-col items-start gap-3 px-4 py-5">
                            <button @click="toggleOpenProfile" class="flex items-center gap-3 text-black hover:text-red-900">
                                <svg class="w-6 h-6 text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                                  </svg>
                                Profile
                            </button>

                            <button @click="toggleOpenSettings" class="flex items-center gap-3 hover:text-red-900">
                                <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M9.6 2.6A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2l.5.3a2 2 0 0 1 2.9 0l1.4 1.3a2 2 0 0 1 0 2.9l.1.5h.1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2l-.3.5a2 2 0 0 1 0 2.9l-1.3 1.4a2 2 0 0 1-2.9 0l-.5.1v.1a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2l-.5-.3a2 2 0 0 1-2.9 0l-1.4-1.3a2 2 0 0 1 0-2.9l-.1-.5H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2l.3-.5a2 2 0 0 1 0-2.9l1.3-1.4a2 2 0 0 1 2.9 0l.5-.1V4c0-.5.2-1 .6-1.4ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z" clip-rule="evenodd"/>
                                  </svg>
                                Settings
                            </button>
                            <button @click="toggleOpenLogout" class="flex items-center gap-3 hover:text-red-900">
                                <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd"/>
                                  </svg>
                                Log-out
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        <!-- EDIT PROFILE ---->
            <div @click.outside="openProfile=false" x-transition x-show="openProfile" class="w-auto h-auto bg-[#F0E8E8] rounded lg">
                    <div class="pb-8 sm:rounded-lg">
                        <div class="grid max-w-2xl px-5 py-3 mx-auto mb-2 "> <!-- Adjusted margin top to remove whitespace -->
                            <div class="flex flex-col items-center space-y-3 sm:flex-row">
                                <img class="object-cover w-40 h-40 p-1 rounded-full ring-2 ring-red-800 dark:ring-red-500"
                                     src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-2.png"
                                     alt="Bordered avatar">
                                <div class="flex flex-col space-y-5 sm:ml-8">
                                    <button type="button"
                                            class="py-3.5 px-7 text-base font-bold text-indigo-100 focus:outline-none bg-red-900 rounded-lg border border-red-200 hover:bg-red-700 focus:z-10">
                                        Change picture
                                    </button>
                                    <button type="button"
                                            class="py-3.5 px-7 text-base font-bold text-red-900 focus:outline-none bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-red-900 focus:z-10`">
                                        Delete picture
                                    </button>
                                </div>
                            </div>
                            <div class="items-center mt-7 text-[#202142]">
                                    <div
                                        class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                                        <div class="w-full">
                                            <label for="first_name"
                                                class="block mb-2 text-base font-bold text-red-900 dark:text-white">
                                                First Name</label>
                                            <input type="text" id="first_name"
                                                class="bg-red-50 border border-red-700 text-red-900 text-sm rounded-lg  block w-full p-2.5 "
                                                placeholder="Your first name">
                                        </div>
                                        <div class="w-full">
                                            <label for="last_name"
                                                class="block mb-2 text-base font-bold text-red-900 dark:text-white">
                                                Last Name</label>
                                            <input type="text" id="last_name"
                                                class="bg-red-50 border border-red-700 text-indigo-900 text-sm rounded-lg  block w-full p-2.5 "
                                                placeholder="Your last name">
                                        </div>
                                    </div>
                                    <div class="mb-2 sm:mb-6">
                                        <label for="email"
                                            class="block mb-2 text-base font-bold text-red-900 dark:text-white">Email
                                            </label>
                                        <input type="email" id="email"
                                            class="bg-red-50 border border-red-700 text-red-900 text-sm rounded-lg block w-full p-2.5 "
                                            placeholder="your.email@mail.com" required>
                                    </div>
                                    <div
                                    class="flex flex-col items-center w-full mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-4 sm:space-y-0 sm:mb-6">
                                    <div class="w-full">
                                        <label for="first_name"
                                            class="block mb-2 text-base font-bold text-red-900 dark:text-white">Position
                                            </label>
                                        <input type="text" id="first_name"
                                            class="bg-red-50 border border-red-700 text-red-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                            placeholder="Your position">
                                    </div>
                                    <div class="w-full">
                                        <label for="department"
                                            class="block mb-2 text-base font-bold text-red-900 dark:text-white">
                                            Department</label>
                                        <input type="text" id="last_name"
                                            class="bg-red-50 border border-red-700 text-indigo-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 "
                                            placeholder="Your department">
                                    </div>
                                </div>
                                    <div class="mb-6">
                                        <label for="message"
                                            class="block mb-2 text-base font-bold text-red-900 dark:text-white">Description</label>
                                        <textarea id="message" rows="4"
                                            class="block p-2.5 w-full text-sm text-red-700 bg-red-50 rounded-lg border border-red-700 focus:ring-indigo-500 focus:border-indigo-500 "
                                            placeholder="Write your description here..."></textarea>
                                    </div>
                                    <div class="flex justify-end gap-3">
                                        <button x-on:click="openProfile= false" type="submit"
                                            class="text-white bg-red-900  hover:bg-red-800  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Save</button>
                                            <button x-on:click="openProfile= false" type="submit"
                                            class="text-white bg-red-900  hover:bg-red-800  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

            <!--- SETTINGS --->
            <div @click.outside="openSettings=false" x-transition x-show="openSettings" class="hidden p-10 space-y-6 bg-white pb-14 md:block">
                <div>
                  <h2 class="mb-2 text-2xl font-bold tracking-tight text-red-900 ">Settings</h2>
                  <p class="mt-2 text-black">
                    Manage your account settings and set e-mail preferences.
                  </p>
                </div>

                <div class="w-full h-auto shrink-0 bg-border"></div>
                <div class="flex flex-col space-y-8 lg:flex-row lg:space-x-12 lg:space-y-0">
                    <nav class="flex space-x-2 lg:flex-col lg:space-x-0 lg:space-y-1">
                        <a class="inline-flex items-center justify-start px-4 py-2 text-sm font-bold text-black transition-colors rounded-md focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:text-accent-foreground h-9 bg-muted hover:bg-muted"
                        href="/examples/forms/account">Account</a>

                        <a class="inline-flex items-center justify-start px-4 py-2 text-sm font-bold text-black transition-colors rounded-md focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:text-accent-foreground h-9 hover:bg-transparent hover:underline"
                        href="/examples/forms/appearance">Appearance</a>

                        <a class="inline-flex items-center justify-start px-4 py-2 text-sm font-bold text-black transition-colors rounded-md focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:text-accent-foreground h-9 hover:bg-transparent hover:underline"
                        href="/examples/forms/notifications">Notifications</a>

                        <a class="inline-flex items-center justify-start px-4 py-2 text-sm font-bold text-black transition-colors rounded-md focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:text-accent-foreground h-9 hover:bg-transparent hover:underline"
                        href="/examples/forms/display">Display</a>
                    </nav>

                    <div class="w-4/5 col-span-8 px-8 overflow-hidden shadow rounded-xl bg-gray-50">
                        <div class="pt-4 pb-3 border-b">
                        <h1 class="py-2 pl-1 text-lg font-semibold text-left text-black">Language and Time</h1>
                        <p class="pl-1 text-sm text-slate-600">Update language and time.</p>
                        </div>
                        <div class="grid mb-3 sm:grid-cols-2">
                            <div class="grid grid-cols-2 gap-3 pb-3 mt-3 mb-2">
                                <div>
                                    <label for="language" class="block pl-2 mt-3 mb-2 text-sm font-medium text-black dark:text-white">Language</label>
                                    <select id="language" class="border-gray-400 border bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                        <option selected="">English (US)</option>
                                        <option value="italian">Italiano</option>
                                        <option value="french">French</option>
                                        <option value="japanese">Japanese</option>
                                        <option value="chinese">Chinese</option>
                                        <option value="portuguese">Portuguese </option>
                                        <option value="filipino">Filipino</option>

                                    </select>
                                </div>
                                <div>
                                    <label for="time" class="block mt-3 mb-2 ml-3 text-sm font-medium text-black dark:text-white">Time</label>
                                    <select id="time" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                        <option selected="">UTC−05:00 (ET) – Eastern Time zone</option>
                                        <option value="UK">UTC+05:00 – Kerguelen Islands, Saint Paul and Amsterdam Islands</option>
                                        <option value="PH">UTC+08:00 (PHT)</option>
                                        <option value="SK">UTC+09:00 (Korea Standard Time)</option>
                                        <option value="UK">UTC−02:00 – South Georgia and the South Sandwich Islands</option>
                                        <option value="UK">UTC−08:00 (Zone 4 or Northwest Zone) – State of Baja California</option>
                                        <option value="UK">UTC+08:00 (HKT)</option>
                                        <option value="UK">UTC+08:00 (SST)</option>
                                        <option value="UK">UTC−06:00 – Easter Island</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-4/5 col-span-8 ml-40 overflow-hidden shadow rounded-xl bg-gray-50">
                    <div class="pt-4 pb-3 border-b">
                        <h1 class="py-2 pl-10 text-lg font-semibold text-left text-black">Alerts and Notifications</h1>
                        <p class="pl-10 text-sm text-slate-600">Get notifications.</p>
                    </div>
                    <div class="grid py-6 border-b sm:grid-cols-2">
                        <div class="">
                            <h2 class="py-2 pl-10 text-[16px] font-semibold leading-4 text-black">Company News</h2>
                            <p class="pl-10 text-sm text-slate-600">Get announcements, and updates from PMC</p>
                        </div>
                        <div class="flex items-center mt-4 mr-5 sm:justify-end">
                            <div class="flex flex-col gap-3">
                                <label for="push" class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" id="push" class="sr-only peer" checked />
                                    <div class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:top-[2px] after:left-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-red-800 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-red-300 "></div>
                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Push</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="grid py-6 border-b sm:grid-cols-2">
                        <div class="">
                            <h2 class="py-2 pl-10 text-[16px] font-semibold leading-4 text-black">Account Activity</h2>
                            <p class="pl-10 text-sm text-slate-600">Get important notifications or activity you've missed from PMC</p>
                        </div>
                        <div class="flex items-center mt-4 mr-5 sm:justify-end">
                            <div class="flex flex-col gap-3">
                                <label for="push" class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" id="push" class="sr-only peer" checked />
                                    <div class="peer h-6 w-11 rounded-full bg-gray-200 after:absolute after:top-[2px] after:left-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-red-800 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-red-300 "></div>
                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Push</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LOGOUT --->
            <div @click.outside="openLogout=false" x-transition x-show="openLogout" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden transition-opacity bg-gray-500 bg-opacity-75">

                <div class="p-4 sm:p-10 bg-gray-50 rounded-md  w-[300px] md:w-[500px] text-center overflow-y-auto">
                    <span class="mb-4 inline-flex justify-center items-center w-[62px] h-[62px] rounded-full border-4 border-red-900 bg-red-900 text-white">
                            <svg class="w-10 h-10 text-white"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill= "none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                    </span>
                    <h3 class="mb-2 mr-5 text-2xl font-bold text-red-800">
                        Log out
                    </h3>
                    <p class="text-gray-500">
                        Are you sure you would like to log out of your account?
                    </p>

                    <div class="flex justify-center mt-6 gap-x-4">
                        <a class="py-2.5 px-5 inline-flex justify-center items-center gap-2 rounded-md border font-medium text-white bg-red-900  hover:bg-red-800 shadow-sm align-middle  focus:outline-none focus:ring-2 focus:ring-offset-2  transition-all text-sm"
                            href="{{route('jas')}}">
                            Log out
                        </a>
                        <button x-on:click="openLogout= false" type="button" class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded-md text-center ext-center text-black bg-white border border-red-600  hover:bg-red-800 hover:text-white  font-semibold transition-all text-sm">
                                Cancel
                        </button>
                    </div>
                </div>
            </div>
       </nav>

        <div class="pt-20 pb-24 pr-5 pl-72">
            {{ $slot }}
        </div>

  <footer class="fixed bottom-0 left-0 z-10 w-full p-4 bg-white border-t border-gray-200 shadow h-14 md:flex md:items-center md:justify-between md:p-6 ">
    <div class="flex items-center justify-between gap-4 py-3">
    <span class="text-[12px] font-medium text-left text-gray-500 ml-72 sm:text-center dark:text-gray-400">© 2024 Philippian Marketing Corporation </a>. All Rights Reserved 2024.
    </span>
    <ul class="flex flex-wrap items-center mt-3 ml-96 text-[12px] font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="hover:underline hover:text-red-900 me-4 md:me-6">About</a>
        </li>
        <li>
            <a href="#" class="hover:underline hover:text-red-900 me-4 md:me-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="hover:underline hover:text-red-900 me-4 md:me-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline hover:text-red-900">Contact</a>
        </li>
    </ul>
    </div>
</footer>
</div>
        @livewireScriptConfig
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('showMenu', () => ({
                    open: false,
                    openNotification: false,
                    openMessage: false,
                    openProfile: false,
                    openLogout: false,
                    openSettings: false,

                    toggle() {
                        this.open = ! this.open
                    },
                    toggleOpenNotification() {
                        this.openNotification = ! this.openNotification
                    },
                    toggleOpenMessage() {
                        this.openMessage = ! this.openMessage
                    },
                    toggleOpenProfile() {
                        this.openProfile = ! this.openProfile
                    },
                    toggleOpenLogout() {
                        this.openLogout = ! this.openLogout
                    },
                    toggleOpenSettings() {
                        this.openSettings = ! this.openSettings
                    },

                }))
            })
        </script>
    </body>
</html>

<div>

  {{-- <div class="flex items-center w-full h-32 gap-2 bg-white rounded-2xl">
    <img class="w-12 h-12 ml-3 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-2.png" alt="">
    <h10 class="ml-3 text-2xl font-semibold text-left text-red-900 ">Welcome, Jasmine!</h10> --}}


    <div class="flex items-center justify-between top ">
        <img class="w-12 h-12 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-2.png" alt="">
        <h10 class="m-auto ml-4 text-2xl font-semibold text-left text-red-900 bg-blue">Welcome, Jasmine!</h10>

        {{-- <ul class="bg-red-900  space-x-3 w-max flex items-center rounded mr-2 font-[sans-serif] mt-4">
            <li class="text-white hover:bg-red-800 px-1.5 py-1 rounded text-base cursor-pointer flex items-center">
                <svg class="w-4 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11.4 5H5a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2v-6.4a3 3 0 0 1-1.7-1.6l-3 3A3 3 0 1 1 10 9.8l3-3A3 3 0 0 1 11.4 5Z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M13.2 4c0-.6.5-1 1-1H20c.6 0 1 .4 1 1v5.8a1 1 0 1 1-2 0V6.4l-6.2 6.2a1 1 0 0 1-1.4-1.4L17.6 5h-3.4a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                </svg> Import
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 -rotate-90 fill-white" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z"
                        clip-rule="evenodd" data-original="#000000">
                    </path>
              </svg>
            </li>
            <li class="text-white px-1.5 py-1 rounded text-base cursor-pointer gap-2 flex items-center">
                <svg class="w-4 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M13 11.1V4a1 1 0 1 0-2 0v7.1L8.8 8.4a1 1 0 1 0-1.6 1.2l4 5a1 1 0 0 0 1.6 0l4-5a1 1 0 1 0-1.6-1.2L13 11Z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M9.7 15.9 7.4 13H5a2 2 0 0 0-2 2v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.4l-2.3 2.9a3 3 0 0 1-4.6 0Zm7.3.1a1 1 0 1 0 0 2 1 1 0 1 0 0-2Z" clip-rule="evenodd"/>
                </svg> Export
            </li>
        </ul> --}}
    </div>
    <div class="grid grid-cols-4 gap-1 mt-8">
        <div class="bg-gradient-to-r from-[#7f0012] to-[#1b0a07]  text-white rounded-2xl py-5 px-4 w-64 h-32 flex justify-between shadow-md">
            <div class="flex flex-col w-full h-32">
                        <p class="text-[23px] font-bold text-white ">Completed</p>
                      <div class="flex items-center justify-between gap-4 pt-5 space-x-1 text-sm font-medium text-green-600 rtl:space-x-reverse">
                        <p class="text-sm font-thin text-white ">30 Tasks</p>
                        <span class="inline-flex items-center gap-2 py-1 pl-5 text-xs font-medium text-green-500 ">
                            42.5% increase
                            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                            </svg>

                          </span>

                    </div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-[#7f0012] to-[#1b0a07] text-white rounded-2xl py-5 px-4 w-64 h-32 flex justify-between shadow-md">
            <div class="flex flex-col w-full h-32">
                <p class="text-[23px] font-bold text-white ">Pending</p>
                <div class="flex items-center justify-between gap-4 pt-5 space-x-1 text-sm font-medium text-red-600 rtl:space-x-reverse">
                  <p class="text-sm font-thin text-white ">15 Tasks</p>
                  <span class="inline-flex items-center gap-2 py-1 pl-5 text-xs font-medium text-red-500 ">
                    15% decrease
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                    </svg>

                  </span>

              </div>

            </div>
        </div>
        <div class="bg-gradient-to-r from-[#7f0012] to-[#1b0a07] text-white rounded-2xl py-5 px-4 w-64 h-32 flex justify-between shadow-md">
            <div class="flex flex-col w-full h-32">
                <p class="text-[23px] font-bold text-white ">On-Going</p>
                <div class="flex items-center justify-between gap-4 pt-5 space-x-1 text-sm font-medium text-green-600 rtl:space-x-reverse">
                  <p class="text-sm font-thin text-white ">15 Tasks</p>
                  <span class="inline-flex items-center gap-2 py-1 pl-5 text-xs font-medium text-green-500 ">
                    30% increase
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                    </svg>

                  </span>

              </div>

            </div>
        </div>

        <div class="bg-gradient-to-r from-[#7f0012] to-[#1b0a07] text-white rounded-2xl py-5 px-4 w-64 h-32 flex justify-between shadow-md">
            <div class="flex flex-col w-full h-32">
                <p class="text-[23px] font-bold text-white ">Total Users</p>
                <div class="flex items-center justify-between gap-4 pt-5 space-x-1 text-sm font-medium text-red-600 rtl:space-x-reverse">
                  <p class="text-sm font-thin text-white ">20 Users</p>
                  <span class="inline-flex items-center gap-2 py-1 pl-5 text-xs font-medium text-red-500 ">
                    35% decrease
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                    </svg>

                  </span>

              </div>

            </div>
        </div>
        {{-- <div class="col-span-1 ">
        <div class="bg-gradient-to-r from-[#7f0012] to-[#1b0a07] text-white rounded-2xl w-64 py-5 px-4 h-32 flex justify-between shadow-md">
            <p class="text-[25px] font-bold text-white ">Total Users</p>
            <p class="pt-5 text-sm font-thin text-white ">20 Tasks</p>


          <div class="relative size-44">
            <svg class="size-full" width="36" height="36" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg">
            <circle cx="18" cy="18" r="16" fill="none" class="text-gray-200 stroke-current dark:text-gray-700" stroke-width="2"></circle>
                 <g class="origin-center transform -rotate-90">
            <circle cx="18" cy="18" r="16" fill="none" class="text-red-600 stroke-current " stroke-width="2" stroke-dasharray="100" stroke-dashoffset="75"></circle>
                </g>
            </svg>


        <div class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 start-1/2">
            <span class="text-2xl font-bold text-center text-gray-800 dark:text-white">53%</span>
        </div>
        </div>

        </div>
    </div> --}}
    </div>
    <div class="grid grid-cols-3 gap-5 mt-12">

        <div class="col-span-2 p-5 bg-white rounded shadow-md h-90 ">
            <div id="progress-chart"></div>
            <div class="flex items-center justify-between">
            <h2 class="text-red-900 text-[20px] font-bold"> Progress </h2>
            {{-- <button id="dropdownDefaultButton"
                data-dropdown-toggle="lastDaysdropdown"
                data-dropdown-placement="bottom" type="button" class="inline-flex items-center px-3 py-1 text-sm font-medium text-white bg-red-900 border rounded-lg focus:outline-none hover:bg-red-700 hover:text-white focus:z-10 focus:ring-4 focus:ring-red-200">Last week
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
            </button> --}}
        {{-- <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 "> --}}
              <div class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <select id="category" class="block w-full p-1 font-medium text-white bg-red-800 border rounded-lg hover:bg-red-600 white text-bold focus:ring-primary-500 focus:border-primary-500">
                    <option selected="Last Week">Last Week</option>
                    <option value="Today">Today</option>
                    <option value="Last 7 days">Last 7 days </option>
                    <option value="Last 30 days">Last 30 days</option>
                </select>
                {{-- <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                </li> --}}
            </div>
          {{-- </div> --}}
            </div>

            <canvas id="myChart"></canvas>
        </div>

        <div class="w-full pb-3 pr-5 overflow-y-auto bg-white rounded shadow-md h-90">
                <div class="mt-4 ml-4 text-sm font-bold text-left text-red-900">Members</div>
                <div class="mt-3 ml-4 ">
                        <ul class="max-w-md divide-y divide-gray-200">
                            <li class="sm:pb-2">
                               <div class="flex items-center space-x-4 rtl:space-x-reverse">
                                  <div class="flex-shrink-0">
                                     <img class="w-12 h-12 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="">
                                  </div>
                                  <div class="inline-flex items-center">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900">
                                           Jasmine B
                                        </p>
                                        <p class="flex items-center text-sm text-gray-600 ">
                                            <span class="flex w-2 h-2 bg-green-500 rounded-full me-2"></span>
                                           Active
                                        </p>
                                     </div>
                                  </div>
                                  <div>
                                    <div class="flex items-center justify-between gap-3 pb-3">
                                      <span class="bg-purple-100 text-purple-800 text-[11px] font-medium me-2 px-2.5  rounded-lg">Development</span>
                                      <span class="text-sm font-bold text-red-800">55%</span>
                                    </div>
                                    <div class="flex w-full h-2 overflow-hidden bg-gray-200 rounded-full" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                      <div class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition duration-500 bg-red-600 rounded-full whitespace-nowrap" style="width: 55%"></div>
                                    </div>
                                  </div>
                               </div>
                            </li>
                            <li class="py-3 sm:py-2">
                                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                                   <div class="flex-shrink-0">
                                      <img class="w-12 h-12 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-1.png" alt="">
                                   </div>
                                   <div class="inline-flex items-center">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900">
                                           Jasmine B
                                        </p>
                                        <p class="flex items-center text-sm text-gray-600 ">
                                            <span class="flex w-2 h-2 bg-green-500 rounded-full me-2"></span>
                                           Active
                                        </p>
                                     </div>
                                  </div>
                                  <div>
                                    <div class="flex items-center justify-between gap-3 pb-3">
                                      <span class="bg-blue-100 text-blue-800 text-[11px] font-medium me-2 px-2.5  rounded-lg">Development</span>
                                      <span class="text-sm font-bold text-green-800">98%</span>
                                    </div>
                                    <div class="flex w-full h-2 overflow-hidden bg-gray-200 rounded-full" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                      <div class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition duration-500 bg-green-600 rounded-full whitespace-nowrap" style="width: 98%"></div>
                                    </div>
                                  </div>
                                </div>
                             </li>
                             <li class="py-3 sm:py-2">
                                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                                   <div class="flex-shrink-0">
                                      <img class="w-12 h-12 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-2.png" alt="">
                                   </div>
                                   <div class="inline-flex items-center">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900">
                                           Jasmine B
                                        </p>
                                        <p class="flex items-center text-sm text-gray-600 ">
                                            <span class="flex w-2 h-2 bg-green-500 rounded-full me-2"></span>
                                           Active
                                        </p>
                                     </div>
                                  </div>
                                  <div>
                                    <div class="flex items-center justify-between gap-3 pb-3">
                                      <span class="bg-purple-100 text-purple-800 text-[11px] font-medium me-2 px-2.5  rounded-lg">Development</span>
                                      <span class="text-sm font-bold text-red-800">75%</span>
                                    </div>
                                    <div class="flex w-full h-2 overflow-hidden bg-gray-200 rounded-full" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                      <div class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition duration-500 bg-red-600 rounded-full whitespace-nowrap" style="width: 75%"></div>
                                    </div>
                                  </div>
                                </div>
                             </li>
                             <li class="py-3 sm:py-2">
                                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                                   <div class="flex-shrink-0">
                                      <img class="w-12 h-12 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-6.png" alt="">
                                   </div>
                                   <div class="inline-flex items-center">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900">
                                           Jasmine B
                                        </p>
                                        <p class="flex items-center text-sm text-gray-600 ">
                                            <span class="flex w-2 h-2 bg-green-500 rounded-full me-2"></span>
                                           Active
                                        </p>
                                     </div>
                                  </div>
                                  <div>
                                    <div class="flex items-center justify-between gap-3 pb-3">
                                      <span class="bg-red-100 text-red-800 text-[11px] font-medium me-2 px-2.5  rounded-lg">Development</span>
                                      <span class="text-sm font-bold text-yellow-800">35%</span>
                                    </div>
                                    <div class="flex w-full h-2 overflow-hidden bg-gray-200 rounded-full" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                      <div class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition duration-500 bg-yellow-600 rounded-full whitespace-nowrap" style="width: 35%"></div>
                                    </div>
                                  </div>
                                </div>
                             </li>
                             <li class="py-3 sm:py-2">
                                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                                   <div class="flex-shrink-0">
                                      <img class="w-12 h-12 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="">
                                   </div>
                                   <div class="inline-flex items-center">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900">
                                           Jasmine B
                                        </p>
                                        <p class="flex items-center text-sm text-gray-600 ">
                                            <span class="flex w-2 h-2 bg-red-500 rounded-full me-2"></span>
                                           Inactive
                                        </p>
                                     </div>
                                  </div>
                                  <div>
                                    <div class="flex items-center justify-between gap-3 pb-3">
                                      <span class="bg-purple-100 text-purple-800 text-[11px] font-medium me-2 px-2.5  rounded-lg">Development</span>
                                      <span class="text-sm font-bold text-yellow-800">70%</span>
                                    </div>
                                    <div class="flex w-full h-2 overflow-hidden bg-gray-200 rounded-full" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                      <div class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition duration-500 bg-yellow-600 rounded-full whitespace-nowrap" style="width: 70%"></div>
                                    </div>
                                  </div>
                                </div>
                             </li>
                             <li class="py-3 sm:py-2">
                                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                                   <div class="flex-shrink-0">
                                      <img class="w-12 h-12 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-5.png" alt="">
                                   </div>
                                   <div class="inline-flex items-center">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900">
                                           Jasmine B
                                        </p>
                                        <p class="flex items-center text-sm text-gray-600 ">
                                            <span class="flex w-2 h-2 bg-red-500 rounded-full me-2"></span>
                                           Inactive
                                        </p>
                                     </div>
                                  </div>
                                  <div>
                                    <div class="flex items-center justify-between gap-3 pb-3">
                                      <span class="bg-purple-100 text-purple-800 text-[11px] font-medium me-2 px-2.5  rounded-lg">Development</span>
                                      <span class="text-sm font-bold text-yellow-800">45%</span>
                                    </div>
                                    <div class="flex w-full h-2 overflow-hidden bg-gray-200 rounded-full" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                      <div class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition duration-500 bg-yellow-600 rounded-full whitespace-nowrap" style="width: 45%"></div>
                                    </div>
                                  </div>
                                </div>
                             </li>
                         </ul>
                </div>
            </div>
        </div>

        <div class="w-full h-auto pb-3 mt-8 bg-white rounded shadow-md">
            <div class=" ml-4 pt-3 text-red-900 text-[18px] font-sans font-bold">
                Task Projects
            </div>

            <div class="flex flex-col">
                <div class="overflow-x-auto"> <!--- sm:-mx-6 lg:-mx-8 -->
                  <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden ">
                      <table
                        class="min-w-full mt-2 text-sm font-light text-center text-surface dark:text-white">
                        <thead class="font-sans font-bold text-white uppercase bg-red-800 ">
                          <tr>

                            <th scope="col" class="px-6 py-4">Task Name</th>
                            <th scope="col" class="px-3 py-4">Estimate Date</th>
                            <th scope="col" class="px-6 py-4">Role</th>
                            <th scope="col" class="px-6 py-4">Team</th>
                            <th scope="col" class="px-5 py-4">Status</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr class="bg-gray-100 rounded-s-lg">
                            <td class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap"> Draft project brief</td>
                            <td class="px-3 py-4 font-normal text-gray-900 whitespace-nowrap"> Feb. 1, 2024 - Feb. 2, 2024</td>
                            <td class="px-6 py-4 whitespace-nowrap">FrontEnd</td>
                            <td class="px-8 py-3">
                                <div class="flex justify-center -space-x-4 rtl:space-x-reverse">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-2.png" alt="">
                                    <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="">
                                    <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-600 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+2</a>
                                </div>
                            </td>
                            <td class="flex items-center px-6 py-3 text-center">
                                <div class="w-full h-2 bg-gray-300 rounded-full">
                                  <div class="w-4/5 h-full bg-red-800 rounded-full"></div>
                                </div>
                                <p class="ml-2 text-xs text-gray-400">80%</p>
                              </td>
                          </tr>
                          <tr class="bg-gray-100 rounded-s-lg">
                              <td class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap"> Draft project brief</td>
                              <td class="px-3 py-4 font-normal text-gray-900 whitespace-nowrap"> Mar. 10, 2024 - Mar. 16, 2024</td>
                              <td class="px-6 py-4 whitespace-nowrap">FrontEnd</td>
                              <td class="py-3 px-7 whitespace-nowrap">
                                  <div class="flex justify-center -space-x-4 rtl:space-x-reverse">
                                      <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-4.png" alt="">
                                      <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-5.png" alt="">
                                      <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-600 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+2</a>
                                  </div>
                              </td>
                              <td class="flex items-center px-6 py-3 text-center">
                                <div class="w-full h-2 bg-gray-300 rounded-full">
                                  <div class="w-2/5 h-full bg-yellow-400 rounded-full"></div>
                                </div>
                                <p class="ml-2 text-xs text-gray-400">25%</p>
                              </td>
                            </tr>
                            <tr class="bg-gray-100 rounded-s-lg">
                                <td class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap"> Draft project brief</td>
                                <td class="px-3 py-4 font-normal text-gray-900 whitespace-nowrap"> Feb. 1, 2024 - Feb. 2, 2024</td>
                                <td class="px-6 py-4 whitespace-nowrap">BackEnd</td>
                                <td class="py-3 px-7 whitespace-nowrap">
                                    <div class="flex justify-center -space-x-4 rtl:space-x-reverse">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-6.png" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-1.png" alt="">
                                        <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-600 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+2</a>
                                    </div>
                                </td>
                                <td class="flex items-center px-6 py-3 text-center">
                                  <div class="w-full h-2 bg-gray-300 rounded-full">
                                    <div class="h-full bg-red-800 rounded-full" style="width: 65%"></div>
                                  </div>
                                  <p class="ml-2 text-xs text-gray-400">65%</p>
                                </td>
                              </tr>
                              <tr class="bg-gray-100 rounded-s-lg">
                                <td class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap"> Draft project brief</td>
                                <td class="px-3 py-4 font-normal text-gray-900 whitespace-nowrap"> Feb. 28, 2024 - Mar. 2, 2024</td>
                                <td class="px-6 py-4 whitespace-nowrap">Network</td>
                                <td class="py-3 px-7 whitespace-nowrap">
                                    <div class="flex justify-center -space-x-4 justify -center rtl:space-x-reverse">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-6.png" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-4.png" alt="">
                                        <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-600 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+2</a>
                                    </div>
                                </td>
                                <td class="flex items-center px-6 py-3 text-center">
                                  <div class="w-full h-2 bg-gray-300 rounded-full">
                                    <div class="h-full bg-green-600 rounded-full" style="width: 95%"></div>
                                  </div>
                                  <p class="ml-2 text-xs text-gray-400">95%</p>
                                </td>
                              </tr>
                              <tr class="bg-gray-100 rounded-s-lg">
                                <td class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap"> Draft project brief</td>
                                <td class="px-3 py-4 font-normal text-gray-900 whitespace-nowrap"> Feb. 1, 2024 - Feb. 2, 2024</td>
                                <td class="px-6 py-4 whitespace-nowrap">FrontEnd</td>
                                <td class="py-3 px-7 whitespace-nowrap">
                                    <div class="flex justify-center -space-x-4 rtl:space-x-reverse">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-2.png" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-2.png" alt="">
                                        <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-600 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+2</a>                                 </div>
                                </td>
                                <td class="flex items-center px-6 py-3 text-center">
                                  <div class="w-full h-2 bg-gray-300 rounded-full">
                                    <div class="w-2/5 h-full bg-yellow-400 rounded-full"></div>
                                  </div>
                                  <p class="ml-2 text-xs text-gray-400">25%</p>
                                </td>
                              </tr>
                              <tr class="bg-gray-100 rounded-s-lg">
                                <td class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap"> Draft project brief</td>
                                <td class="px-3 py-4 font-normal text-gray-900 whitespace-nowrap"> Mar. 15, 2024 - Mar. 18, 2024</td>
                                <td class="px-6 py-4 whitespace-nowrap">Network</td>
                                <td class="py-3 px-7 whitespace-nowrap">
                                    <div class="flex justify-center -space-x-4 rtl:space-x-reverse">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-5.png" alt="">
                                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png" alt="">
                                        <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-600 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+2</a>
                                    </div>
                                </td>
                                <td class="flex items-center px-6 py-3 text-center">
                                  <div class="w-full h-2 bg-gray-300 rounded-full">
                                    <div class="h-full bg-green-700 rounded-full" style="width: 98%"></div>
                                  </div>
                                  <p class="ml-2 text-xs text-gray-400">98%</p>
                                </td>
                              </tr>
                          </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            {{-- <thead class="text-xs text-white uppercase bg-red-800">
                <tr>
                    <th scope="col" class="p-4">
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Task Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Estimate Date

                        </div>
                    </th>
                    <th scope="col" class="px-8 py-3">
                        <div class="flex items-center">
                            Type

                        </div>
                    </th>
                    <th scope="col" class="px-8 py-3">
                        <div class="flex items-center">
                            Team

                        </div>
                    </th>
                    <th scope="col" class="px-8 py-3">
                        Status
                    </th>
                </tr>
            </thead> --}}


        </div>



    <script src="https://cdn.jsdelivr.net/npm/chart.js">

    </script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['March 18', 'March 19', 'March 20', 'March 21', 'March 22', 'March 23'],
            datasets: [{
            label: 'On-Going',
            backgroundColor: ['rgb(139, 0, 0)'],
            data: [12, 19, 7, 5, 10, 7],
            borderColor: 'red',
            borderWidth: 2
            }, {
            label: 'Pending',
            backgroundColor: ['rgb(253, 224, 71)'],
            data: [7, 10, 3, 3, 4, 5],
            borderColor: 'yellow',
            borderWidth: 2
            }, {
            label: 'Completed',
            backgroundColor: ['rgb(21, 128, 61)'],
            data: [10, 10, 10, 13, 10, 15],
            borderColor: 'green',
            borderWidth: 2
            }
        ]
        },

        options: {
            scales: {
            y: {
                beginAtZero: true
            }
            }
        }

        });
    </script>


</div>



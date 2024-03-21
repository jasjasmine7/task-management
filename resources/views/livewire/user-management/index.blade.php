<div>
    <div class="flex items-center justify-between top">
        <h10 class="ml-4 text-2xl font-semibold text-left text-red-900">User Management</h10>
        <a href="#" class="text-white bg-red-900 hover:bg-red-800 focus:ring-4 font-medium rounded-lg text-sm px-5 mt-4 py-2.5 me-4 mb-2"> + Add Member</a>
    </div>
<div class="relative mt-5 ml-4 mr-4  overflow-x-auto bg-gradient-to-r from-[#7f0012] to-[#680b08] shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-800 rtl:text-right">
        <div class="">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex flex-wrap items-end justify-between pb-4 mt-3 ml-5 mr-5 space-y-4 flex-column sm:flex-row sm:space-y-0">
                    <div class="flex items-center gap-2">
                        <div>
                            <label for="start" class="text-[14px] font-semibold text-white ">Start Date:</label>
                            <input type="date" id="birthday" name="birthday" class="block w-full p-1 text-sm text-gray-900 border border-red-900 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="end" class=" text-[14px] font-semibold text-white">End Date:</label>
                            <input type="date" id="birthday" name="birthday" class="block w-full p-1 text-sm text-gray-900 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-50">
                        </div>
                    </div>
                    <div class="flex items-center gap-2">

                        <button type="button" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-white bg-red-900 rounded-md hover:bg-red-800 focus:ring-4 focus:outline-none hover:text-primary-700 focus:z-10">
                            <svg class="w-5 h-5 mr-2 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M16.444 18H19a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h2.556M17 11V5a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v6h10ZM7 15h10v4a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1v-4Z"/>
                              </svg>
                            Print
                        </button>
                        <button type="button" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-white bg-red-900 rounded-md hover:bg-red-800 focus:ring-4 focus:outline-none hover:text-primary-700 focus:z-10">
                            <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                            </svg>
                            Export
                        </button>
                        <div class="relative">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-5">
                                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                        </div>
                            <input type="text" id="table-search" class="block p-2 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 w-60" placeholder="Search here">

                    </div>
                </div>
        </div>
        <thead class="text-xs text-white uppercase bg-red-800">
            <tr>
                <th scope="col" class="p-4">
                </th>
                <th scope="col" class="px-3 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Member Name
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
  </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Email
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
  </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Role
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
  </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        Department
                        <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
  </svg></a>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-black bg-white border-b">
                <td class="w-4 p-4">
                </td>
                <th scope="row" class="px-3 py-4 font-medium text-black">
                    1
                </th>
                <td class="px-6 py-4">
                    Sample Name
                </td>
                <td class="px-6 py-4">
                    abc@gmail.com
                </td>
                <td class="px-6 py-4">
                    Web FrontEnd
                </td>
                <td class="px-6 py-4">
                    <select name="filter" id="filter" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                        <option value="Active" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</option>
                        <option value="Inactive" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</option>
                      </select>
                </td>
                <td class="px-6 py-4">
                    IT Department
                </td>
                <td class="flex items-center px-2 py-4 ">
                 <!---- EDIT ---->
                 <div x-data="{ open: false}">
                    <button @click="open=true" class="ml-5 -mr-0.5" title="Edit">
                       <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-800 hover:fill-blue-700"
                         viewBox="0 0 348.882 348.882">
                         <path
                           d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                           data-original="#000000" />
                         <path
                           d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                           data-original="#000000" />
                       </svg>
                     </button>
       <!--- EDIT CONTENT -->
                     <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                       <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                       <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 overflow-hidden bg-white rounded-md shadow-xl ">
                               <div class="relative h-auto px-3 pt-5 mb-1 bg-white rounded-lg dark:bg-red-700">
                                   <p class="text-[20px] pl-2 font-semibold  text-red-900 rounded-t-lg">
                                       Update User
                                   </p>
                                   <form action="#" >
                                       <div class="w-full mb-2 ">
                                           <div>
                                               <label for="name" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Name</label>
                                               <input type="text" name="name" id="name" class=" mt-3 mb-2  bg-red-50 border border-red-800  text-gray-900 text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type name" required="">
                                           </div>
                                           <div>
                                               <label for="email" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Email</label>
                                               <input type="text" name="email" id="email" class="mt-3 mb-2  bg-red-50 border border-red-800  text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type email" required="">
                                           </div>
                                           <div class="grid grid-cols-2 gap-3">
                                               <div>
                                                   <label for="role" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Role</label>
                                                   <select id="role" class="border-red-800 border bg-red-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                                       <option selected="">Select role</option>
                                                       <option value="FrontEnd">Web FrontEnd</option>
                                                       <option value="BackEnd">Web BackEnd</option>
                                                       <option value="Network">Network</option>
                                                   <option value="Support">Support</option>
                                                   </select>
                                               </div>
                                               <div>
                                                   <label for="category" class="block mt-3 mb-2 ml-3 text-sm font-bold text-red-900 dark:text-white">Department</label>
                                                   <select id="category" class="bg-red-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                                       <option selected="">Select department</option>
                                                       <option value="IT">IT Department</option>
                                                       <option value="Marketing">Marketing Department</option>
                                                       <option value="Sales">Sales Department</option>
                                                   </select>
                                               </div>
                                       </div>
                                       </div>
                                       <div class="flex items-center justify-end mr-3">
                                       <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-white bg-red-900 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                           Save Changes
                                       </button>
                                       <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-black bg-white border border-red-900 rounded-lg hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                                          Cancel
                                       </button>
                                       </div>
                                   </form>
                                  </div>
                       </div>
                       </div>
                   </div>
     <!---- DELETE ---->
                     <!---- DELETE ---->
                     <div class="mr-4 ">
                        <div x-data="{ open: false}">
                            <button x-on:click="open = true" class="px-2 py-2" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-600 hover:fill-red-700" viewBox="0 0 24 24">
                                    <path
                                    d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                    data-original="#000000" />
                                    <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                    data-original="#000000" />
                                </svg>
                            </button>
                            <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                                <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                                <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 w-full max-w-md overflow-hidden bg-white rounded-md shadow-xl ">
                                    <div class="flex items-center justify-center gap-2 px-4 py-3 text-white bg-red-800">
                                        <svg class="flex-shrink-0 size-9 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/>
                                        </svg>
                                        <h2 class="text-lg font-medium">Delete User</h2>
                                    </div>
                                    <div class="p-4 font-medium text-center text-black">
                                        <p>Are you sure you want to delete?</p>
                                    </div>
                                    <div class="flex items-center justify-end gap-5 px-32 py-2 border-t">
                                        <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> Yes </button>
                                        <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> No </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </td>
            </tr>
            <tr class="text-black bg-gray-100 border-b">
                <td class="w-4 p-4">
                </td>
                <th scope="row" class="px-3 py-4 font-medium text-black">
                    2
                </th>
                <td class="px-6 py-4">
                    Jasmine Belinda
                </td>
                <td class="px-6 py-4">
                    jkl@gmail.com
                </td>
                <td class="px-6 py-4">
                    Web Backend
                </td>
                <td class="px-6 py-4">
                    <select name="filter" id="filter" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                        <option value="Active" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</option>
                        <option value="Inactive" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</option>
                      </select>
                </td>
                <td class="px-6 py-4">
                    IT Department
                </td>
                <td class="flex items-center px-2 py-4">
                        <!---- EDIT ---->
                                   <!---- EDIT ---->
                   <div x-data="{ open: false}">
                    <button @click="open=true" class="ml-5 -mr-0.5" title="Edit">
                       <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-800 hover:fill-blue-700"
                         viewBox="0 0 348.882 348.882">
                         <path
                           d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                           data-original="#000000" />
                         <path
                           d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                           data-original="#000000" />
                       </svg>
                     </button>
       <!--- EDIT CONTENT -->
                     <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                       <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                       <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 overflow-hidden bg-white rounded-md shadow-xl ">
                               <div class="relative h-auto px-3 pt-5 mb-1 bg-white rounded-lg dark:bg-red-700">
                                   <p class="text-[20px] pl-2 font-semibold  text-red-900 rounded-t-lg">
                                       Update User
                                   </p>
                                   <form action="#" >
                                       <div class="w-full mb-2 ">
                                           <div>
                                               <label for="name" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Name</label>
                                               <input type="text" name="name" id="name" class=" mt-3 mb-2  bg-red-50 border border-red-800  text-gray-900 text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type name" required="">
                                           </div>
                                           <div>
                                               <label for="email" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Email</label>
                                               <input type="text" name="email" id="email" class="mt-3 mb-2  bg-red-50 border border-red-800  text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type email" required="">
                                           </div>
                                           <div class="grid grid-cols-2 gap-3">
                                               <div>
                                                   <label for="role" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Role</label>
                                                   <select id="role" class="border-red-800 border bg-red-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                                       <option selected="">Select role</option>
                                                       <option value="FrontEnd">Web FrontEnd</option>
                                                       <option value="BackEnd">Web BackEnd</option>
                                                       <option value="Network">Network</option>
                                                   <option value="Support">Support</option>
                                                   </select>
                                               </div>
                                               <div>
                                                   <label for="category" class="block mt-3 mb-2 ml-3 text-sm font-bold text-red-900 dark:text-white">Department</label>
                                                   <select id="category" class="bg-red-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 ">
                                                       <option selected="">Select department</option>
                                                       <option value="IT">IT Department</option>
                                                       <option value="Marketing">Marketing Department</option>
                                                       <option value="Sales">Sales Department</option>
                                                   </select>
                                               </div>
                                       </div>
                                       </div>
                                       <div class="flex items-center justify-end mr-3">
                                        <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-white bg-red-900 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                            Save Changes
                                        </button>
                                        <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-black bg-white border border-red-900 rounded-lg hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                                           Cancel
                                        </button>
                                       </div>
                                   </form>
                                  </div>
                       </div>
                       </div>
                   </div>

                       <!---- DELETE ---->
                                       <!---- DELETE ---->
                                  <div class="mr-4 ">
                                    <div x-data="{ open: false}">
                                        <button x-on:click="open = true" class="px-2 py-2" title="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-600 hover:fill-red-700" viewBox="0 0 24 24">
                                                <path
                                                d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                data-original="#000000" />
                                                <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                                data-original="#000000" />
                                            </svg>
                                        </button>
                                        <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                                            <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                                            <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 w-full max-w-md overflow-hidden bg-white rounded-md shadow-xl ">
                                                <div class="flex items-center justify-center gap-2 px-4 py-3 text-white bg-red-800">
                                                    <svg class="flex-shrink-0 size-9 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/>
                                                    </svg>
                                                    <h2 class="text-lg font-medium">Delete User</h2>
                                                </div>
                                                <div class="p-4 font-medium text-center text-black">
                                                    <p>Are you sure you want to delete?</p>
                                                </div>
                                                <div class="flex items-center justify-end gap-5 px-32 py-2 border-t">
                                                    <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> Yes </button>
                                                    <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> No </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  </td>
            </tr>
            <tr class="text-black bg-white border-b">
                <td class="w-4 p-4">
                </td>
                <th scope="row" class="px-3 py-4 font-medium text-black">
                    3
                </th>
                <td class="px-6 py-4">
                    Sample Name
                </td>
                <td class="px-6 py-4">
                    abc@gmail.com
                </td>
                <td class="px-6 py-4">
                    Web Frontend
                </td>
                <td class="px-6 py-4">
                    <select name="filter" id="filter" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                        <option value="Active" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</option>
                        <option value="Inactive" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</option>
                      </select>
                </td>
                <td class="px-6 py-4">
                    IT Department
                </td>
                <td class="flex items-center px-2 py-4">
                   <!---- EDIT ---->
                   <div x-data="{ open: false}">
                    <button @click="open=true" class="ml-5 -mr-0.5" title="Edit">
                       <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-800 hover:fill-blue-700"
                         viewBox="0 0 348.882 348.882">
                         <path
                           d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                           data-original="#000000" />
                         <path
                           d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                           data-original="#000000" />
                       </svg>
                     </button>
       <!--- EDIT CONTENT -->
                     <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                       <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                       <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 overflow-hidden bg-white rounded-md shadow-xl ">
                               <div class="relative h-auto px-3 pt-5 mb-1 bg-white rounded-lg dark:bg-red-700">
                                   <p class="text-[20px] pl-2 font-semibold  text-red-900 rounded-t-lg">
                                       Update User
                                   </p>
                                   <form action="#" >
                                       <div class="w-full mb-2 ">
                                           <div>
                                               <label for="name" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Name</label>
                                               <input type="text" name="name" id="name" class=" mt-3 mb-2  bg-red-50 border border-red-800  text-gray-900 text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type name" required="">
                                           </div>
                                           <div>
                                               <label for="email" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Email</label>
                                               <input type="text" name="email" id="email" class="mt-3 mb-2  bg-red-50 border border-red-800  text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type email" required="">
                                           </div>
                                           <div class="grid grid-cols-2 gap-3">
                                               <div>
                                                   <label for="role" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Role</label>
                                                   <select id="role" class="border-red-800 border bg-red-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                                       <option selected="">Select role</option>
                                                       <option value="FrontEnd">Web FrontEnd</option>
                                                       <option value="BackEnd">Web BackEnd</option>
                                                       <option value="Network">Network</option>
                                                   <option value="Support">Support</option>
                                                   </select>
                                               </div>
                                               <div>
                                                   <label for="category" class="block mt-3 mb-2 ml-3 text-sm font-bold text-red-900 dark:text-white">Department</label>
                                                   <select id="category" class="bg-red-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 ">
                                                       <option selected="">Select department</option>
                                                       <option value="IT">IT Department</option>
                                                       <option value="Marketing">Marketing Department</option>
                                                       <option value="Sales">Sales Department</option>
                                                   </select>
                                               </div>
                                       </div>
                                       </div>
                                       <div class="flex items-center justify-end mr-3">
                                        <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-white bg-red-900 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                            Save Changes
                                        </button>
                                        <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-black bg-white border border-red-900 rounded-lg hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                                           Cancel
                                        </button>
                                       </div>
                                   </form>
                                  </div>
                       </div>
                       </div>
                   </div>

                   <!---- DELETE ---->
                   <div class="mr-4 ">
                    <div x-data="{ open: false}">
                        <button x-on:click="open = true" class="px-2 py-2" title="Delete">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-600 hover:fill-red-700" viewBox="0 0 24 24">
                                <path
                                d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                data-original="#000000" />
                                <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                data-original="#000000" />
                            </svg>
                        </button>
                        <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                            <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                            <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 w-full max-w-md overflow-hidden bg-white rounded-md shadow-xl ">
                                <div class="flex items-center justify-center gap-2 px-4 py-3 text-white bg-red-800">
                                    <svg class="flex-shrink-0 size-9 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/>
                                    </svg>
                                    <h2 class="text-lg font-medium">Delete User</h2>
                                </div>
                                <div class="p-4 font-medium text-center text-black">
                                    <p>Are you sure you want to delete?</p>
                                </div>
                                <div class="flex items-center justify-end gap-5 px-32 py-2 border-t">
                                    <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> Yes </button>
                                    <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> No </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            </td>

            </tr>
            <tr class="text-black bg-gray-100 border-b">
                <td class="w-4 p-4">
                </td>
                <th scope="row" class="px-3 py-4 font-medium text-black">
                    4
                </th>
                <td class="px-6 py-4">
                    Sample Name
                </td>
                <td class="px-6 py-4">
                    jkl@gmail.com
                </td>
                <td class="px-6 py-4">
                    Web Frontend
                </td>
                <td class="px-6 py-4">
                    <select name="filter" id="filter" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                        <option value="Active" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</option>
                        <option value="Inactive" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</option>
                      </select>
                </td>
                <td class="px-6 py-4">
                    IT Department
                </td>
                <td class="flex items-center px-2 py-4">
                    <!---- EDIT ---->
                           <!---- EDIT ---->
                   <div x-data="{ open: false}">
                    <button @click="open=true" class="ml-5 -mr-0.5" title="Edit">
                       <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-800 hover:fill-blue-700"
                         viewBox="0 0 348.882 348.882">
                         <path
                           d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                           data-original="#000000" />
                         <path
                           d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                           data-original="#000000" />
                       </svg>
                     </button>
       <!--- EDIT CONTENT -->
                     <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                       <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                       <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 overflow-hidden bg-white rounded-md shadow-xl ">
                               <div class="relative h-auto px-3 pt-5 mb-1 bg-white rounded-lg dark:bg-red-700">
                                   <p class="text-[20px] pl-2 font-semibold  text-red-900 rounded-t-lg">
                                       Update User
                                   </p>
                                   <form action="#" >
                                       <div class="w-full mb-2 ">
                                           <div>
                                               <label for="name" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Name</label>
                                               <input type="text" name="name" id="name" class=" mt-3 mb-2  bg-red-50 border border-red-800  text-gray-900 text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type name" required="">
                                           </div>
                                           <div>
                                               <label for="email" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Email</label>
                                               <input type="text" name="email" id="email" class="mt-3 mb-2  bg-red-50 border border-red-800  text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type email" required="">
                                           </div>
                                           <div class="grid grid-cols-2 gap-3">
                                               <div>
                                                   <label for="role" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Role</label>
                                                   <select id="role" class="border-red-800 border bg-red-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                                       <option selected="">Select role</option>
                                                       <option value="FrontEnd">Web FrontEnd</option>
                                                       <option value="BackEnd">Web BackEnd</option>
                                                       <option value="Network">Network</option>
                                                   <option value="Support">Support</option>
                                                   </select>
                                               </div>
                                               <div>
                                                   <label for="category" class="block mt-3 mb-2 ml-3 text-sm font-bold text-red-900 dark:text-white">Department</label>
                                                   <select id="category" class="bg-red-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 ">
                                                       <option selected="">Select department</option>
                                                       <option value="IT">IT Department</option>
                                                       <option value="Marketing">Marketing Department</option>
                                                       <option value="Sales">Sales Department</option>
                                                   </select>
                                               </div>
                                       </div>
                                       </div>
                                       <div class="flex items-center justify-end mr-3">
                                        <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-white bg-red-900 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                            Save Changes
                                        </button>
                                        <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-black bg-white border border-red-900 rounded-lg hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                                           Cancel
                                        </button>
                                       </div>
                                   </form>
                                  </div>
                       </div>
                       </div>
                   </div>

                   <!---- DELETE ---->
                   <div class="mr-4 ">
                        <div x-data="{ open: false}">
                            <button x-on:click="open = true" class="px-2 py-2" title="Delete">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-600 hover:fill-red-700" viewBox="0 0 24 24">
                                    <path
                                    d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                    data-original="#000000" />
                                    <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                    data-original="#000000" />
                                </svg>
                            </button>
                            <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                                <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                                <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 w-full max-w-md overflow-hidden bg-white rounded-md shadow-xl ">
                                    <div class="flex items-center justify-center gap-2 px-4 py-3 text-white bg-red-800">
                                        <svg class="flex-shrink-0 size-9 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/>
                                        </svg>
                                        <h2 class="text-lg font-medium">Delete User</h2>
                                    </div>
                                    <div class="p-4 font-medium text-center text-black">
                                        <p>Are you sure you want to delete?</p>
                                    </div>
                                    <div class="flex items-center justify-end gap-5 px-32 py-2 border-t">
                                        <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> Yes </button>
                                        <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> No </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr class="text-black bg-white border-b">
                <td class="w-4 p-4">
                </td>
                <th scope="row" class="px-3 py-4 font-medium text-black">
                    5
                </th>
                <td class="px-6 py-4">
                    Jasmine Belinda
                </td>
                <td class="px-6 py-4">
                    jkl@gmail.com
                </td>
                <td class="px-6 py-4">
                    Web Backend
                </td>
                <td class="px-6 py-4">
                    <select name="filter" id="filter" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                        <option value="Active" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</option>
                        <option value="Inactive" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</option>
                      </select>
                </td>
                <td class="px-6 py-4">
                    IT Department
                </td>
                <td class="flex items-center px-2 py-4">
                    <!---- EDIT ---->
                            <div x-data="{ open: false}">
                                 <button @click="open=true" class="ml-5 -mr-0.5" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-800 hover:fill-blue-700"
                                      viewBox="0 0 348.882 348.882">
                                      <path
                                        d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                                        data-original="#000000" />
                                      <path
                                        d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                                        data-original="#000000" />
                                    </svg>
                                  </button>
                    <!--- EDIT CONTENT -->
                                  <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                                    <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                                    <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 overflow-hidden bg-white rounded-md shadow-xl ">
                                            <div class="relative h-auto px-3 pt-5 mb-1 bg-white rounded-lg dark:bg-red-700">
                                                <p class="text-[20px] pl-2 font-semibold  text-red-900 rounded-t-lg">
                                                    Update User
                                                </p>
                                                <form action="#" >
                                                    <div class="w-full mb-2 ">
                                                        <div>
                                                            <label for="name" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Name</label>
                                                            <input type="text" name="name" id="name" class=" mt-3 mb-2  bg-red-50 border border-red-800  text-gray-900 text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type name" required="">
                                                        </div>
                                                        <div>
                                                            <label for="email" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Email</label>
                                                            <input type="text" name="email" id="email" class="mt-3 mb-2  bg-red-50 border border-red-800  text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type email" required="">
                                                        </div>
                                                        <div class="grid grid-cols-2 gap-3">
                                                            <div>
                                                                <label for="role" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Role</label>
                                                                <select id="role" class="border-red-800 border bg-red-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                                                    <option selected="">Select role</option>
                                                                    <option value="FrontEnd">Web FrontEnd</option>
                                                                    <option value="BackEnd">Web BackEnd</option>
                                                                    <option value="Network">Network</option>
                                                                <option value="Support">Support</option>
                                                                </select>
                                                            </div>
                                                            <div>
                                                                <label for="category" class="block mt-3 mb-2 ml-3 text-sm font-bold text-red-900 dark:text-white">Department</label>
                                                                <select id="category" class="bg-red-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 ">
                                                                    <option selected="">Select department</option>
                                                                    <option value="IT">IT Department</option>
                                                                    <option value="Marketing">Marketing Department</option>
                                                                    <option value="Sales">Sales Department</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    </div>
                                                    <div class="flex items-center justify-end mr-3">
                                                        <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-white bg-red-900 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                                            Save Changes
                                                        </button>
                                                        <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-black bg-white border border-red-900 rounded-lg hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                                                           Cancel
                                                        </button>
                                                    </div>
                                                </form>
                                               </div>
                                    </div>
                                    </div>
                                </div>

                   <!---- DELETE ---->

                              <div class="mr-4 ">
                                <div x-data="{ open: false}">
                                    <button x-on:click="open = true" class="px-2 py-2" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-600 hover:fill-red-700" viewBox="0 0 24 24">
                                            <path
                                            d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                            data-original="#000000" />
                                            <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                            data-original="#000000" />
                                        </svg>
                                    </button>
                                    <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                                        <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                                        <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 w-full max-w-md overflow-hidden bg-white rounded-md shadow-xl ">
                                            <div class="flex items-center justify-center gap-2 px-4 py-3 text-white bg-red-800">
                                                <svg class="flex-shrink-0 size-9 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/>
                                                </svg>
                                                <h2 class="text-lg font-medium">Delete User</h2>
                                            </div>
                                            <div class="p-4 font-medium text-center text-black">
                                                <p>Are you sure you want to delete?</p>
                                            </div>
                                            <div class="flex items-center justify-end gap-5 px-32 py-2 border-t">
                                                <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> Yes </button>
                                                <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> No </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              </td>
            </tr>
            <tr class="text-black bg-gray-100 border-b">
                <td class="w-4 p-4">
                </td>
                <th scope="row" class="px-3 py-4 font-medium text-black">
                    6
                </th>
                <td class="px-6 py-4">
                    Sample Name
                </td>
                <td class="px-6 py-4">
                    abc@gmail.com
                </td>
                <td class="px-6 py-4">
                    Web Frontend
                </td>
                <td class="px-6 py-4">
                    <select name="filter" id="filter" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                        <option value="Active" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</option>
                        <option value="Inactive" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</option>
                      </select>
                </td>
                <td class="px-6 py-4">
                    IT Department
                </td>
                <td class="flex items-center px-2 py-4">
        <!---- EDIT ---->
        <div x-data="{ open: false}">
            <button @click="open=true" class="ml-5 -mr-0.5" title="Edit">
               <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-800 hover:fill-blue-700"
                 viewBox="0 0 348.882 348.882">
                 <path
                   d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                   data-original="#000000" />
                 <path
                   d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                   data-original="#000000" />
               </svg>
             </button>
<!--- EDIT CONTENT -->
             <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
               <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
               <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 overflow-hidden bg-white rounded-md shadow-xl ">
                       <div class="relative h-auto px-3 pt-5 mb-1 bg-white rounded-lg dark:bg-red-700">
                           <p class="text-[20px] pl-2 font-semibold  text-red-900 rounded-t-lg">
                               Update User
                           </p>
                           <form action="#" >
                               <div class="w-full mb-2 ">
                                   <div>
                                       <label for="name" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Name</label>
                                       <input type="text" name="name" id="name" class=" mt-3 mb-2  bg-red-50 border border-red-800  text-gray-900 text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type name" required="">
                                   </div>
                                   <div>
                                       <label for="email" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Email</label>
                                       <input type="text" name="email" id="email" class="mt-3 mb-2  bg-red-50 border border-red-800  text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type email" required="">
                                   </div>
                                   <div class="grid grid-cols-2 gap-3">
                                       <div>
                                           <label for="role" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Role</label>
                                           <select id="role" class="border-red-800 border bg-red-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                               <option selected="">Select role</option>
                                               <option value="FrontEnd">Web FrontEnd</option>
                                               <option value="BackEnd">Web BackEnd</option>
                                               <option value="Network">Network</option>
                                           <option value="Support">Support</option>
                                           </select>
                                       </div>
                                       <div>
                                           <label for="category" class="block mt-3 mb-2 ml-3 text-sm font-bold text-red-900 dark:text-white">Department</label>
                                           <select id="category" class="bg-red-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 ">
                                               <option selected="">Select department</option>
                                               <option value="IT">IT Department</option>
                                               <option value="Marketing">Marketing Department</option>
                                               <option value="Sales">Sales Department</option>
                                           </select>
                                       </div>
                               </div>
                               </div>
                               <div class="flex items-center justify-end mr-3">
                                <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-white bg-red-900 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Save Changes
                                </button>
                                <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-black bg-white border border-red-900 rounded-lg hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                                   Cancel
                                </button>
                               </div>
                           </form>
                          </div>
               </div>
               </div>
           </div>

       <!---- DELETE ---->
                      <div class="mr-4 ">
                          <div x-data="{ open: false}">
                              <button x-on:click="open = true" class="px-2 py-2" title="Delete">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-600 hover:fill-red-700" viewBox="0 0 24 24">
                                      <path
                                      d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                      data-original="#000000" />
                                      <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                      data-original="#000000" />
                                  </svg>
                              </button>
                              <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                                  <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                                  <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 w-full max-w-md overflow-hidden bg-white rounded-md shadow-xl sm:w-80">
                                      <div class="flex items-center justify-center gap-2 px-4 py-3 text-white bg-red-800">
                                          <svg class="flex-shrink-0 size-9 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/>
                                          </svg>
                                          <h2 class="text-lg font-medium">Delete User</h2>
                                      </div>
                                      <div class="p-4 font-medium text-center text-black">
                                          <p>Are you sure you want to delete?</p>
                                      </div>
                                      <div class="flex items-center justify-end gap-5 px-20 py-2 border-t">
                                          <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> Yes </button>
                                          <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> No </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </td>
            </tr>
            <tr class="text-black bg-white border-b">
                <td class="w-4 p-4">
                </td>
                <th scope="row" class="px-3 py-4 font-medium text-black">
                    7
                </th>
                <td class="px-6 py-4">
                    Sample Name
                </td>
                <td class="px-6 py-4">
                    abc@gmail.com
                </td>
                <td class="px-6 py-4">
                    Web Frontend
                </td>
                <td class="px-6 py-4">
                    <select name="filter" id="filter" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                        <option value="Active" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</option>
                        <option value="Inactive" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</option>
                      </select>

                </td>
                <td class="px-6 py-4">
                    IT Department
                </td>
                <td class="flex items-center px-2 py-4 ">
 <!---- EDIT ---->
 <div x-data="{ open: false}">
    <button @click="open=true" class="ml-5 -mr-0.5" title="Edit">
       <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-800 hover:fill-blue-700"
         viewBox="0 0 348.882 348.882">
         <path
           d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
           data-original="#000000" />
         <path
           d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
           data-original="#000000" />
       </svg>
     </button>
<!--- EDIT CONTENT -->
     <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
       <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
       <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 overflow-hidden bg-white rounded-md shadow-xl ">
               <div class="relative h-auto px-3 pt-5 mb-1 bg-white rounded-lg dark:bg-red-700">
                   <p class="text-[20px] pl-2 font-semibold  text-red-900 rounded-t-lg">
                       Update User
                   </p>
                   <form action="#" >
                       <div class="w-full mb-2 ">
                           <div>
                               <label for="name" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Name</label>
                               <input type="text" name="name" id="name" class=" mt-3 mb-2  bg-red-50 border border-red-800  text-gray-900 text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type name" required="">
                           </div>
                           <div>
                               <label for="email" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Email</label>
                               <input type="text" name="email" id="email" class="mt-3 mb-2  bg-red-50 border border-red-800  text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type email" required="">
                           </div>
                           <div class="grid grid-cols-2 gap-3">
                               <div>
                                   <label for="role" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Role</label>
                                   <select id="role" class="border-red-800 border bg-red-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                       <option selected="">Select role</option>
                                       <option value="FrontEnd">Web FrontEnd</option>
                                       <option value="BackEnd">Web BackEnd</option>
                                       <option value="Network">Network</option>
                                   <option value="Support">Support</option>
                                   </select>
                               </div>
                               <div>
                                   <label for="category" class="block mt-3 mb-2 ml-3 text-sm font-bold text-red-900 dark:text-white">Department</label>
                                   <select id="category" class="bg-red-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 ">
                                       <option selected="">Select department</option>
                                       <option value="IT">IT Department</option>
                                       <option value="Marketing">Marketing Department</option>
                                       <option value="Sales">Sales Department</option>
                                   </select>
                               </div>
                       </div>
                       </div>
                       <div class="flex items-center justify-end mr-3">
                        <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-white bg-red-900 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Save Changes
                        </button>
                        <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-black bg-white border border-red-900 rounded-lg hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                           Cancel
                        </button>
                       </div>
                   </form>
                  </div>
       </div>
       </div>
   </div>
     <!---- DELETE ---->
             <!---- DELETE ---->
             <div class="mr-4 ">
                <div x-data="{ open: false}">
                    <button x-on:click="open = true" class="px-2 py-2" title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-600 hover:fill-red-700" viewBox="0 0 24 24">
                            <path
                            d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                            data-original="#000000" />
                            <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                            data-original="#000000" />
                        </svg>
                    </button>
                    <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                        <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                        <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 w-full max-w-md overflow-hidden bg-white rounded-md shadow-xl ">
                            <div class="flex items-center justify-center gap-2 px-4 py-3 text-white bg-red-800">
                                <svg class="flex-shrink-0 size-9 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/>
                                </svg>
                                <h2 class="text-lg font-medium">Delete User</h2>
                            </div>
                            <div class="p-4 font-medium text-center text-black">
                                <p>Are you sure you want to delete?</p>
                            </div>
                            <div class="flex items-center justify-end gap-5 px-32 py-2 border-t">
                                <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> Yes </button>
                                <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> No </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                  </td>
            </tr>
            <tr class="text-black bg-gray-100 border-b">
                <td class="w-4 p-4">
                </td>
                <th scope="row" class="px-3 py-4 font-medium text-black">
                    8
                </th>
                <td class="px-6 py-4">
                    Jasmine Belinda
                </td>
                <td class="px-6 py-4">
                    jkl@gmail.com
                </td>
                <td class="px-6 py-4">
                    Web Backend
                </td>
                <td class="px-6 py-4">
                    <select name="filter" id="filter" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                        <option value="Active" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</option>
                        <option value="Inactive" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</option>
                      </select>
                </td>
                <td class="px-6 py-4">
                    IT Department
                </td>
                <td class="flex items-center px-2 py-4">
          <!---- EDIT ---->
          <div x-data="{ open: false}">
            <button @click="open=true" class="ml-5 -mr-0.5" title="Edit">
               <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-800 hover:fill-blue-700"
                 viewBox="0 0 348.882 348.882">
                 <path
                   d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                   data-original="#000000" />
                 <path
                   d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                   data-original="#000000" />
               </svg>
             </button>
<!--- EDIT CONTENT -->
             <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
               <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
               <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 overflow-hidden bg-white rounded-md shadow-xl ">
                       <div class="relative h-auto px-3 pt-5 mb-1 bg-white rounded-lg dark:bg-red-700">
                           <p class="text-[20px] pl-2 font-semibold  text-red-900 rounded-t-lg">
                               Update User
                           </p>
                           <form action="#" >
                               <div class="w-full mb-2 ">
                                   <div>
                                       <label for="name" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Name</label>
                                       <input type="text" name="name" id="name" class=" mt-3 mb-2  bg-red-50 border border-red-800  text-gray-900 text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type name" required="">
                                   </div>
                                   <div>
                                       <label for="email" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Email</label>
                                       <input type="text" name="email" id="email" class="mt-3 mb-2  bg-red-50 border border-red-800  text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type email" required="">
                                   </div>
                                   <div class="grid grid-cols-2 gap-3">
                                       <div>
                                           <label for="role" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Role</label>
                                           <select id="role" class="border-red-800 border bg-red-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                               <option selected="">Select role</option>
                                               <option value="FrontEnd">Web FrontEnd</option>
                                               <option value="BackEnd">Web BackEnd</option>
                                               <option value="Network">Network</option>
                                           <option value="Support">Support</option>
                                           </select>
                                       </div>
                                       <div>
                                           <label for="category" class="block mt-3 mb-2 ml-3 text-sm font-bold text-red-900 dark:text-white">Department</label>
                                           <select id="category" class="bg-red-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 ">
                                               <option selected="">Select department</option>
                                               <option value="IT">IT Department</option>
                                               <option value="Marketing">Marketing Department</option>
                                               <option value="Sales">Sales Department</option>
                                           </select>
                                       </div>
                               </div>
                               </div>
                               <div class="flex items-center justify-end mr-3">
                                <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-white bg-red-900 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Save Changes
                                </button>
                                <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-black bg-white border border-red-900 rounded-lg hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                                   Cancel
                                </button>
                               </div>
                           </form>
                          </div>
               </div>
               </div>
           </div>
                   <!---- DELETE ---->
                               <!---- DELETE ---->
                               <div class="mr-4 ">
                                <div x-data="{ open: false}">
                                    <button x-on:click="open = true" class="px-2 py-2" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-600 hover:fill-red-700" viewBox="0 0 24 24">
                                            <path
                                            d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                            data-original="#000000" />
                                            <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                            data-original="#000000" />
                                        </svg>
                                    </button>
                                    <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                                        <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                                        <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 w-full max-w-md overflow-hidden bg-white rounded-md shadow-xl ">
                                            <div class="flex items-center justify-center gap-2 px-4 py-3 text-white bg-red-800">
                                                <svg class="flex-shrink-0 size-9 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/>
                                                </svg>
                                                <h2 class="text-lg font-medium">Delete User</h2>
                                            </div>
                                            <div class="p-4 font-medium text-center text-black">
                                                <p>Are you sure you want to delete?</p>
                                            </div>
                                            <div class="flex items-center justify-end gap-5 px-32 py-2 border-t">
                                                <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> Yes </button>
                                                <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> No </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              </td>
            </tr>
            <tr class="text-black bg-white border-b">
                <td class="w-4 p-4">
                </td>
                <th scope="row" class="px-3 py-4 font-medium text-black">
                    9
                </th>
                <td class="px-6 py-4">
                    Sample Name
                </td>
                <td class="px-6 py-4">
                    abc@gmail.com
                </td>
                <td class="px-6 py-4">
                    Web Backend
                </td>
                <td class="px-6 py-4">
                    <select name="filter" id="filter" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">
                        <option value="Active" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</option>
                        <option value="Inactive" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</option>
                      </select>
                </td>
                <td class="px-6 py-4">
                    IT Department
                </td>
                <td class="flex items-center px-2 py-4">
            <!---- EDIT ---->
            <div x-data="{ open: false}">
                <button @click="open=true" class="ml-5 -mr-0.5" title="Edit">
                   <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-800 hover:fill-blue-700"
                     viewBox="0 0 348.882 348.882">
                     <path
                       d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                       data-original="#000000" />
                     <path
                       d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                       data-original="#000000" />
                   </svg>
                 </button>
   <!--- EDIT CONTENT -->
                 <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                   <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                   <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 overflow-hidden bg-white rounded-md shadow-xl ">
                           <div class="relative h-auto px-3 pt-5 mb-1 bg-white rounded-lg dark:bg-red-700">
                               <p class="text-[20px] pl-2 font-semibold  text-red-900 rounded-t-lg">
                                   Update User
                               </p>
                               <form action="#" >
                                   <div class="w-full mb-2 ">
                                       <div>
                                           <label for="name" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Name</label>
                                           <input type="text" name="name" id="name" class=" mt-3 mb-2  bg-red-50 border border-red-800  text-gray-900 text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type name" required="">
                                       </div>
                                       <div>
                                           <label for="email" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Email</label>
                                           <input type="text" name="email" id="email" class="mt-3 mb-2  bg-red-50 border border-red-800  text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type email" required="">
                                       </div>
                                       <div class="grid grid-cols-2 gap-3">
                                           <div>
                                               <label for="role" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Role</label>
                                               <select id="role" class="border-red-800 border bg-red-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                                   <option selected="">Select role</option>
                                                   <option value="FrontEnd">Web FrontEnd</option>
                                                   <option value="BackEnd">Web BackEnd</option>
                                                   <option value="Network">Network</option>
                                               <option value="Support">Support</option>
                                               </select>
                                           </div>
                                           <div>
                                               <label for="category" class="block mt-3 mb-2 ml-3 text-sm font-bold text-red-900 dark:text-white">Department</label>
                                               <select id="category" class="bg-red-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 ">
                                                   <option selected="">Select department</option>
                                                   <option value="IT">IT Department</option>
                                                   <option value="Marketing">Marketing Department</option>
                                                   <option value="Sales">Sales Department</option>
                                               </select>
                                           </div>
                                   </div>
                                   </div>
                                   <div class="flex items-center justify-end mr-3">
                                    <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-white bg-red-900 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                        Save Changes
                                    </button>
                                    <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-black bg-white border border-red-900 rounded-lg hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                                       Cancel
                                    </button>
                                   </div>
                               </form>
                              </div>
                   </div>
                   </div>
               </div>

                   <!---- DELETE ---->
                             <!---- DELETE ---->
                             <div class="mr-4 ">
                                <div x-data="{ open: false}">
                                    <button x-on:click="open = true" class="px-2 py-2" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-600 hover:fill-red-700" viewBox="0 0 24 24">
                                            <path
                                            d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                            data-original="#000000" />
                                            <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                            data-original="#000000" />
                                        </svg>
                                    </button>
                                    <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                                        <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                                        <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 w-full max-w-md overflow-hidden bg-white rounded-md shadow-xl ">
                                            <div class="flex items-center justify-center gap-2 px-4 py-3 text-white bg-red-800">
                                                <svg class="flex-shrink-0 size-9 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/>
                                                </svg>
                                                <h2 class="text-lg font-medium">Delete User</h2>
                                            </div>
                                            <div class="p-4 font-medium text-center text-black">
                                                <p>Are you sure you want to delete?</p>
                                            </div>
                                            <div class="flex items-center justify-end gap-5 px-32 py-2 border-t">
                                                <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> Yes </button>
                                                <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> No </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              </td>
            </tr>
            <tr class="text-black bg-gray-100 border-b">
                <td class="w-4 p-4">
                </td>
                <th scope="row" class="px-2 py-4 font-medium text-black">
                    10
                </th>
                <td class="px-6 py-4">
                    Jasmine Belinda
                </td>
                <td class="px-6 py-4">
                    jkl@gmail.com
                </td>
                <td class="px-6 py-4">
                    Web Backend
                </td>
                <td class="px-6 py-4">
                    <select name="filter" id="filter" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">
                        <option value="Active" class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</option>
                        <option value="Inactive" class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Inactive</option>
                      </select>
                </td>
                <td class="px-6 py-4">
                    IT Department
                </td>
                <td class="flex items-center px-2 py-4">
               <!---- EDIT ---->
               <div x-data="{ open: false}">
                <button @click="open=true" class="ml-5 -mr-0.5" title="Edit">
                   <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-800 hover:fill-blue-700"
                     viewBox="0 0 348.882 348.882">
                     <path
                       d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                       data-original="#000000" />
                     <path
                       d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                       data-original="#000000" />
                   </svg>
                 </button>
   <!--- EDIT CONTENT -->
                 <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                   <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                   <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 overflow-hidden bg-white rounded-md shadow-xl ">
                           <div class="relative h-auto px-3 pt-5 mb-1 bg-white rounded-lg dark:bg-red-700">
                               <p class="text-[20px] pl-2 font-semibold  text-red-900 rounded-t-lg">
                                   Update User
                               </p>
                               <form action="#" >
                                   <div class="w-full mb-2 ">
                                       <div>
                                           <label for="name" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Name</label>
                                           <input type="text" name="name" id="name" class=" mt-3 mb-2  bg-red-50 border border-red-800  text-gray-900 text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type name" required="">
                                       </div>
                                       <div>
                                           <label for="email" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Email</label>
                                           <input type="text" name="email" id="email" class="mt-3 mb-2  bg-red-50 border border-red-800  text-sm rounded-lg block w-[470px] p-2.5" placeholder="Type email" required="">
                                       </div>
                                       <div class="grid grid-cols-2 gap-3">
                                           <div>
                                               <label for="role" class="block pl-2 mt-3 mb-2 text-sm font-bold text-red-900 dark:text-white">Role</label>
                                               <select id="role" class="border-red-800 border bg-red-50 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                                   <option selected="">Select role</option>
                                                   <option value="FrontEnd">Web FrontEnd</option>
                                                   <option value="BackEnd">Web BackEnd</option>
                                                   <option value="Network">Network</option>
                                               <option value="Support">Support</option>
                                               </select>
                                           </div>
                                           <div>
                                               <label for="category" class="block mt-3 mb-2 ml-3 text-sm font-bold text-red-900 dark:text-white">Department</label>
                                               <select id="category" class="bg-red-50 border border-red-800 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 ">
                                                   <option selected="">Select department</option>
                                                   <option value="IT">IT Department</option>
                                                   <option value="Marketing">Marketing Department</option>
                                                   <option value="Sales">Sales Department</option>
                                               </select>
                                           </div>
                                   </div>
                                   </div>
                                   <div class="flex items-center justify-end mr-3">
                                    <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-white bg-red-900 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                        Save Changes
                                    </button>
                                    <button x-on:click="open= false" type="submit" class="inline-flex items-center px-4 py-2 mt-4 mb-4 ml-3 text-sm font-medium text-center text-black bg-white border border-red-900 rounded-lg hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                                       Cancel
                                    </button>
                                   </div>
                               </form>
                              </div>
                   </div>
                   </div>
               </div>

                   <!---- DELETE ---->
                            <!---- DELETE ---->
                            <div class="mr-4 ">
                                <div x-data="{ open: false}">
                                    <button x-on:click="open = true" class="px-2 py-1" title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-600 hover:fill-red-700" viewBox="0 0 24 24">
                                            <path
                                            d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                            data-original="#000000" />
                                            <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                            data-original="#000000" />
                                        </svg>
                                    </button>
                                    <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center px-2 overflow-hidden">
                                        <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>
                                        <div x-show="open" x-transition:enter="transition-transform ease-out duration-300" x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100" x-transition:leave="transition-transform ease-in duration-300" x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75" class="z-50 w-full max-w-md overflow-hidden bg-white rounded-md shadow-xl ">
                                            <div class="flex items-center justify-center gap-2 px-4 py-3 text-white bg-red-800">
                                                <svg class="flex-shrink-0 size-9 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><path d="M12 9v4"/><path d="M12 17h.01"/>
                                                </svg>
                                                <h2 class="text-lg font-medium">Delete User</h2>
                                            </div>
                                            <div class="p-4 font-medium text-center text-black">
                                                <p>Are you sure you want to delete?</p>
                                            </div>
                                            <div class="flex items-center justify-end gap-5 px-32 py-2 border-t">
                                                <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> Yes </button>
                                                <button x-on:click="open = false" class="w-full px-3 py-1 text-white bg-red-800 rounded-md sm:w-20"> No </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="px-6 mt-4 md:flex">
    <p class="flex-1 text-sm text-gray-500">Showind 1 to 5 of 100 entries</p>
    <div class="flex items-center max-md:mt-4">
      <p class="text-sm text-black">Display</p>
      <select class="mx-4 text-sm text-gray-400 border border-gray-600 rounded outline-none h-7">
        <option>10</option>
        <option>20</option>
        <option>50</option>
        <option>70</option>
        <option>100</option>
      </select>
      <ul class="flex ml-2 space-x-1">
        <li class="flex items-center justify-center bg-red-700 rounded cursor-pointer hover:bg-red-400 w-7 h-7">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3 fill-white" viewBox="0 0 55.753 55.753">
            <path
              d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
              data-original="#000000" />
          </svg>
        </li>
        <li class="flex items-center justify-center text-sm rounded cursor-pointer hover:bg-red-700 hover:text-white w-7 h-7">
            <a href="#">1</a>
        </li>
        <li class="flex items-center justify-center text-sm text-black rounded cursor-pointer hover:bg-red-700 hover:text-white w-7 h-7">
            <a href="#">2</a>
        </li>
        <li class="flex items-center justify-center text-sm rounded cursor-pointer hover:bg-red-700 hover:text-white w-7 h-7">
            <a href="#">3</a>
        </li>
        <li class="flex items-center justify-center text-sm rounded cursor-pointer hover:bg-red-700 hover:text-white w-7 h-7">
            <a href="#">4</a>
        </li>
        <li class="flex items-center justify-center bg-red-700 rounded cursor-pointer hover:bg-red-400 w-7 h-7">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3 rotate-180 fill-white" viewBox="0 0 55.753 55.753">
            <path
              d="M12.745 23.915c.283-.282.59-.52.913-.727L35.266 1.581a5.4 5.4 0 0 1 7.637 7.638L24.294 27.828l18.705 18.706a5.4 5.4 0 0 1-7.636 7.637L13.658 32.464a5.367 5.367 0 0 1-.913-.727 5.367 5.367 0 0 1-1.572-3.911 5.369 5.369 0 0 1 1.572-3.911z"
              data-original="#000000" />
          </svg>
        </li>
      </ul>
    </div>
  </div>
</div>


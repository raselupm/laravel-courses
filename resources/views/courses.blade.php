<x-guest-layout>
    <div class="mt-1 bg-gray">
        <div class="mx-auto container">


            <div class="flex items-baseline justify-between pt-10">
                <h1 class="text-lg font-bold tracking-tight text-gray-900">All Courses</h1>
                <div class="flex items-center">
                    <div class="relative inline-block text-left">
                        <select name="sort" id="cars" class="focus-visible:outline-none py-1 px-2 shadow" form="carform">
                            <option>Sort</option>
                            <option value="Recently Added">Recently Added</option>
                            <option value="Most Popular">Most Popular</option>
                            <option value="Best Rating">Best Rating</option>
                            <option value="Recently Updated">Recently Updated</option>
                        </select>
                    </div>
                </div>
            </div>


            <section aria-labelledby="courses-heading" class="pt-6 pb-12">
                <h2 id="courses-heading" class="sr-only">Courses</h2>
                <div class="flex gap-x-8 gap-y-10">

                    <form id="filter-courses" class="w-3/12 block bg-white p-4 px-6 shadow rounded-sm" method="GET">
                        <h3 class="sr-only">Filters</h3>
                        <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900">Search</span>
                                    <span class="ml-6 flex items-center">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" x-show="open">
                          <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" x-show="! open" style="display: none;">
                          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                        </svg>
                      </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6">
                                <div class="space-y-2">
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input name="search" value="{{array_key_exists('search', $_GET) ? $_GET['search'] : ''}}" type="text" class="block w-full rounded border border-gray-300 bg-white py-2 pl-10 pr-3 leading-5 placeholder-gray-500 focus:border-indigo-500 focus:placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm" placeholder="Enter keywords">
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="text-gray-900 font-bold">Level</span>
                                    <span class="ml-6 flex items-center">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" x-show="open">
                          <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" x-show="! open" style="display: none;">
                          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                        </svg>
                      </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level'] === 'beginner') checked @endif id="filter-level-beginner" value="beginner" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 form-submit">
                                        <label for="filter-level-beginner" class="ml-3 text-sm text-gray-600"> Beginner <span class="text-xs text-gray-500">(10)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level'] === 'intermediate') checked @endif id="filter-level-intermediate" value="intermediate" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 form-submit">
                                        <label for="filter-level-intermediate" class="ml-3 text-sm text-gray-600"> Intermediate <span class="text-xs text-gray-500">(11)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level'] === 'advanced') checked @endif id="filter-level-advanced" value="advanced" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 form-submit">
                                        <label for="filter-level-advanced" class="ml-3 text-sm text-gray-600"> Advanced <span class="text-xs text-gray-500">(2)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="text-gray-900 font-bold">Price</span>
                                    <span class="ml-6 flex items-center">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" x-show="open">
                          <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" x-show="! open" style="display: none;">
                          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                        </svg>
                      </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input  id="filter-price-free" value="free" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-price-free" class="ml-3 text-sm text-gray-600"> Free <span class="text-xs text-gray-500">(5)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input  id="filter-price-onetime" value="onetime" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-price-onetime" class="ml-3 text-sm text-gray-600"> Paid (One-time) <span class="text-xs text-gray-500">(9)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input  id="filter-price-membership" value="membership" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-price-membership" class="ml-3 text-sm text-gray-600"> Paid (Membership) <span class="text-xs text-gray-500">(9)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="text-gray-900 font-bold">Duration</span>
                                    <span class="ml-6 flex items-center">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" x-show="open">
                          <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" x-show="! open" style="display: none;">
                          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                        </svg>
                      </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input  id="filter-duration-1h-5h" value="1h-5h" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-duration-1h-5h" class="ml-3 text-sm text-gray-600"> 1-5 hours <span class="text-xs text-gray-500">(16)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input  id="filter-duration-5h-10h" value="5h-10h" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-duration-5h-10h" class="ml-3 text-sm text-gray-600"> 5-10 hours <span class="text-xs text-gray-500">(6)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input  id="filter-duration-10h+" value="10h+" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-duration-10h+" class="ml-3 text-sm text-gray-600"> 10+ hours <span class="text-xs text-gray-500">(0)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="text-gray-900 font-bold">Platform</span>
                                    <span class="ml-6 flex items-center">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" x-show="open">
                          <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" x-show="! open" style="display: none;">
                          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                        </svg>
                      </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input id="filter-platform-1" value="1" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-platform-1" class="ml-3 text-sm text-gray-600"> Laracasts <span class="text-xs text-gray-500">(4)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input  id="filter-platform-2" value="2" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-platform-2" class="ml-3 text-sm text-gray-600"> Laravel Daily <span class="text-xs text-gray-500">(3)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input  id="filter-platform-3" value="3" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-platform-3" class="ml-3 text-sm text-gray-600"> Codecourse <span class="text-xs text-gray-500">(4)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="text-gray-900 font-bold">Series</span>
                                    <span class="ml-6 flex items-center">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" x-show="open">
                          <path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" x-show="! open" style="display: none;">
                          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"></path>
                        </svg>
                      </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input  id="filter-series-1" value="1" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-series-1" class="ml-3 text-sm text-gray-600"> Laravel <span class="text-xs text-gray-500">(18)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input  id="filter-series-2" value="2" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-series-2" class="ml-3 text-sm text-gray-600"> PHP <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input  id="filter-series-3" value="3" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-series-3" class="ml-3 text-sm text-gray-600"> Livewire <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input  id="filter-series-4" value="4" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-series-4" class="ml-3 text-sm text-gray-600"> Vue.js <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input  id="filter-series-5" value="5" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-series-5" class="ml-3 text-sm text-gray-600"> Alpine.js <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input  id="filter-series-6" value="6" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-series-6" class="ml-3 text-sm text-gray-600"> Tailwind CSS <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    <!-- Filters -->
                    <script>
                        let checkbox = document.getElementsByClassName('form-submit');

                        for (let i = 0; i < checkbox.length; i++) {
                            checkbox[i].addEventListener('change', function() {
                                console.log('clicked');
                                document.getElementById('filter-courses').submit();
                            });
                        }

                        // checkbox.addEventListener('click', function() {
                        //     document.getElementById('filter-courses').submit();
                        // });
                    </script>

                    <div class="w-9/12">
                        <ul role="list" class="space-y-6">

                            @foreach($courses as $course)
                            <li class="bg-white px-4 py-6 shadow rounded-sm">
                                <div class="flex justify-center">
                                    <div class="min-w-fit mx-auto">
                                        <img class="inline-block w-10 rounded-full" src="https://laravel-courses.com/storage/series/d373d4a4-ee30-498b-99f6-259898fba344.png" alt="Laravel Logo">
                                    </div>
                                    <div class="w-10/12">
                                        <div class="flex">
                                            <div class="flex-1 overflow-flex-wrap">
                                                <h2 class="text-xl font-bold text-gray-900 mb-1">
                                                    <a href="single.html" class="text-blue-500 hover:underline">{{$course->name}} - {{$course->difficulty_level}}</a>
                                                </h2>
                                                <div class="flex items-center gap-3">
                                                    <div class="flex items-center space-x-px">
                                                        <svg class="w-4 h-4 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        <svg class="w-4 h-4 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        <svg class="w-4 h-4 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        <svg class="w-4 h-4 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        <svg class="w-4 h-4 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="text-sm text-gray-500">0 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 space-y-1 text-sm text-gray-700 line-clamp-5">
                                            <p>A video course for every Laravel developer who wants to know how Laravel works under the hood to become more efficient while using it.</p>
                                        </div>
                                        <div class="mt-6">
                                            <div class="flex flex-col">
                                                <div class="flex space-x-0 gap-2 flex-wrap justify-items-start">
                                                    <div class="inline-flex items-center gap-2 text-sm text-gray-500">
                                                        <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"></path>
                                                        </svg>
                                                        <span>Intermediate</span>
                                                    </div>
                                                    <div class="inline-flex items-center gap-2 text-sm text-gray-500">
                                                        <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5"></path>
                                                        </svg>
                                                        <span>33 videos</span>
                                                    </div>
                                                    <div class="inline-flex items-center gap-2 text-sm text-gray-500">
                                                        <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                        <span>05 h 22 min</span>
                                                    </div>
                                                    <div class="inline-flex items-center gap-2 text-sm text-gray-500">
                                                        <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                        <span>$54.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-6 flex justify-between space-x-8"></div>
                                    </div>
                                    <div class="flex w-1/12 overflow-hidden justify-end">
                                        <img class="inline-block h-8 w-8 rounded-full ring-2 ring-white" src="https://laravel-courses.com/storage/thumbnails/default/56/tp/g7t7058gcgwk00s48cwww.png?p=authors%2Fa489f89a-4866-4c10-961f-5fa6526d9709.png&amp;s=pd&amp;smartcrop=28x28" alt="Christoph Rumpel">
                                    </div>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                        <div class="mt-5">
                            {{$courses->links()}}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-guest-layout>

<x-guest-layout>
    <div class="bg-gray mt-1 py-6">
        <div class="container">

            <nav class="flex mt-0">
                <ol role="list" class="flex items-center space-x-0.5">
                    <li>
                        <div class="-m-1">
                            <a href="{{route('home')}}" class="p-1 ml-0.5 text-base font-medium text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:text-gray-900 focus:ring-gray-900 hover:text-gray-700"> Home </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"></path>
                            </svg>
                            <div class="-m-1">
                                <a href="{{route('courses')}}" class="p-1 ml-0.5 text-base font-medium text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:text-gray-900 focus:ring-gray-900 hover:text-gray-700"> Courses </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"></path>
                            </svg>
                            <div class="-m-1">
                                <a href="{{route('course', $course->slug)}}" class="p-1 ml-0.5 text-base font-medium text-gray-400 rounded-md focus:outline-none focus:ring-2 focus:text-gray-900 focus:ring-gray-900 hover:text-gray-700">
                                    {{$course->name}} </a>
                            </div>
                        </div>
                    </li>
                </ol>
            </nav>


            <!--Single Page Content-->
            <div class="flex mt-8">


                <div class="mt-2 w-2/3 border-gray-100 border-r pr-10 pb-0 border-b-0">
                    <div class="flex">
                        <h1 class="text-3xl font-bold text-gray-900"> {{$course->name}} </h1>
                    </div>
                    <div class="flex items-center gap-3 mt-5">
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
                        <a href="#reviews" class="text-sm text-gray-500"> {{count($course->reviews)}} Review{{count($course->reviews) > 1 ? 's' : ''}} </a>
                    </div>
                    <ul class="flex flex-wrap items-center gap-4 mt-5 text-gray-700">
                        <li class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>{{$course->duration($course->duration)}}</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"></path>
                            </svg>
                            <span>Intermediate</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>{{$course->price ? '$' . number_format($course->price, 2) : 'Free'}}</span>
                        </li>
                    </ul>
                    <div class="rounded-sm mt-8 shadow-sm bg-white">
                        <img class="w-full" src="{{$course->image}}" alt="{{$course->name}}">
                        <div class="p-6">
                            <div class="text-base space-y-6 font-normal text-gray-700 line-clamp-20">
                                {{ $course->description }}
                            </div>
                        </div>
                    </div>


                    <h2 class="mt-4 pt-4 text-lg font-bold text-gray-900 mb-6">Reviews</h2>

                    @if(count($course->reviews) > 0)
                        @foreach($course->reviews as $review)
                            <div class="mb-6 bg-white p-4">
                                <div class="mb-2">{{$review->comment}}</div>
                                <h4 class="font-bold">{{$review->user->name}}</h4>
                            </div>
                        @endforeach
                    @else
                    <p class="bg-white rounded-sm shadow p-6">No review yet.</p>
                    @endif
                </div>


                <div class="w-1/3 pl-10 pt-0">
                    <div class="mt-2 mb-4 space-y-3">
                        <a href="{{$course->link}}" target="_blank" class="flex items-center justify-center w-full px-4 py-3 text-base font-bold text-center text-white transition-all duration-200 bg-red-500 border-2 border-transparent rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 hover:bg-white hover:text-black hover:border-b-2 hover:border-red-500"> Get the {{$course->type ? 'Book' : 'Course'}} &nbsp; <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="mt-2 mb-7 space-y-3">
                        <a href="#" class="flex items-center justify-center w-full px-4 py-3 text-base font-bold text-center text-white transition-all duration-200 hover:bg-white hover:text-black hover:border-b-2 hover:border-black bg-gray-900 border-2 border-transparent rounded focus:outline-none"> Write a Review &nbsp; <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-sm shadow-sm">
                        <div class="space-y-4 p-6">
                            <h3 class="text-sm font-bold tracking-widest text-gray-900 uppercase">Authors</h3>
                            <hr class="mt-5 mb-5 border-gray-200">

                            @foreach($course->authors as $author)
                            <div class="space-y-4 pb-2">
                                <div class="aspect-w-3 aspect-h-2">
                                    <img class="object-cover w-48 m-auto shadow" src="{{$author->image}}" alt="{{$author->name}}">
                                </div>
                                <div class="space-y-1 text-lg font-medium leading-6 text-center">
                                    <h4 class="font-semibold">{{$author->name}}</h4>
                                </div>
                                <ul role="list" class="flex space-x-5 justify-center">
                                    @if(!empty($author->twitter_url))
                                    <li>
                                        <a href="{{$author->twitter_url}}" class="text-gray-400 hover:text-gray-500" target="_blank">
                                            <span class="sr-only">Twitter</span>
                                            <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    @endif
                                    <li>
                                        <a href="https://github.com/freekmurze" class="text-gray-400 hover:text-gray-500" target="_blank">
                                            <span class="sr-only">GitHub</span>
                                            <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://freek.dev/" class="text-gray-400 hover:text-gray-500" target="_blank">
                                            <span class="sr-only">Website</span>
                                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                <div class="text-sm px-7">
                                    <p class="text-gray-500">{{$author->description}}</p>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-sm mt-6 shadow-sm">
                        <div class="px-4 py-5 sm:p-6">
                            <h3 class="text-sm font-bold tracking-widest text-gray-900 uppercase">Topics</h3>
                            <hr class="mt-5 border-gray-200">
                            <div class="mt-8 flex flex-wrap gap-2.5">
                                @foreach($course->topics as $topic)
                                <a href="{{route('topics', $topic->slug)}}" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-1.5 hover:bg-gray-100">
                                    <div class="absolute flex flex-shrink-0 items-center justify-center">
                                        <span class="h-1.5 w-1.5 rounded-full bg-rose-500" aria-hidden="true"></span>
                                    </div>
                                    <div class="ml-3.5 text-sm font-medium text-gray-900">{{$topic->name}}</div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>

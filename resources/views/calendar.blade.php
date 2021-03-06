<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
</head>
<body>
<div class="text-gray-700">

    <!-- Component Start -->
    <div class="flex flex-grow w-screen h-screen overflow-auto">

        <div class="flex flex-col flex-grow">
            <div class="flex items-center mt-4">
                <div class="flex ml-6">
                    <button>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <h2 class="ml-2 text-xl font-bold leading-none">September, 2020</h2>
            </div>
            <div class="grid grid-cols-7 mt-4">
                <div class="pl-1 text-sm">Mon</div>
                <div class="pl-1 text-sm">Tue</div>
                <div class="pl-1 text-sm">Wed</div>
                <div class="pl-1 text-sm">Thu</div>
                <div class="pl-1 text-sm">Fri</div>
                <div class="pl-1 text-sm">Sat</div>
                <div class="pl-1 text-sm">Sun</div>
            </div>
            <div class="grid flex-grow w-full h-auto grid-cols-7 grid-rows-5 gap-px pt-px mt-1 bg-gray-200">
                <div></div>
                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">1 September</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">2</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">3</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">4</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">5</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">6</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">7</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">8</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">9</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">10</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">11</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">12</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">13</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">14</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">15</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">16</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">17</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">18</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">19</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">20</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">21</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">22</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">23</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">24</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">25</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">26</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">27</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">28</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">29</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="relative flex flex-col bg-white group">
                    <span class="mx-2 my-1 text-xs font-bold">30</span>
                    <div class="flex flex-col px-1 py-1 overflow-auto">
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 border border-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">8:30am</span>
                            <span class="ml-2 font-medium leading-none truncate">An unconfirmed event</span>
                        </button>
                        <button class="flex items-center flex-shrink-0 h-5 px-1 text-xs hover:bg-gray-200">
                            <span class="flex-shrink-0 w-2 h-2 bg-gray-500 rounded-full"></span>
                            <span class="ml-2 font-light leading-none">2:15pm</span>
                            <span class="ml-2 font-medium leading-none truncate">A confirmed event</span>
                        </button>
                    </div>
                    <button class="absolute bottom-0 right-0 flex items-center justify-center hidden w-6 h-6 mb-2 mr-2 text-white bg-gray-400 rounded group-hover:flex hover:bg-gray-500">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 plus"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

            </div>
        </div>
    </div>
    <!-- Component End  -->

</div>

<<<<<<< HEAD
<a class="fixed flex items-center justify-center h-8 pr-2 pl-1 bg-blue-600 rounded-full bottom-0 right-0 mr-4 mb-4 shadow-lg text-blue-100 hover:bg-blue-600" href="https://twitter.com/lofiui" target="_top">
    <div class="flex items-center justify-center h-6 w-6 bg-blue-500 rounded-full">
        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24" class="r-jwli3a r-4qtqp9 r-yyyyoo r-16y2uox r-1q142lx r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1srniue"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>
    </div>
    <span class="text-sm ml-1 leading-none">@lofiui</span>
</a>
</body>
</html>
=======
>>>>>>> d88de1d333fe00e25a91d6340042f314760d923e

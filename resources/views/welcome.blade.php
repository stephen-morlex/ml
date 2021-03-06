<x-app-layout>
    @include('layouts.cover')
    <div class="container px-6 mx-auto sm:mt-0">
        <div class="grid sm:grid-cols-3 gap-4">
            <div class="sm:col-span-2 bg-white p-6">
                <div class="flex items-center justify-center my-2">
                    <h3 class="text-3xl font-semibold font-custom border-b-2 pb-2 border-red-500">Latest Music</h3>
                </div>
                <div>
                    <!-- component -->
                    {{-- <div class="w-full">
                        <div class="h-2 bg-red-light"></div>
                        <div class="flex items-center justify-center h-screen bg-red-lightest">
                            <div class="bg-white shadow-lg rounded-lg" style="width: 45rem !important;">
                                <div class="flex">
                                    <div>
                                        <img class="w-full rounded hidden md:block"
                                            src="https://tailwindcss.com/img/card-top.jpg" alt="Album Pic">
                                    </div>
                                    <div class="w-full p-8">
                                        <div class="flex justify-between">
                                            <div>
                                                <h3 class="text-2xl text-grey-darkest font-medium">A Sky Full of Stars
                                                </h3>
                                                <p class="text-sm text-grey mt-1">Ghost Stories</p>
                                            </div>
                                            <div class="text-red-lighter">
                                                <svg class="w-6 h-6" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center mt-8">
                                            <div class="text-grey-darker">
                                                <svg class="w-8 h-8" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path
                                                        d="M6.59 12.83L4.4 15c-.58.58-1.59 1-2.4 1H0v-2h2c.29 0 .8-.2 1-.41l2.17-2.18 1.42 1.42zM16 4V1l4 4-4 4V6h-2c-.29 0-.8.2-1 .41l-2.17 2.18L9.4 7.17 11.6 5c.58-.58 1.59-1 2.41-1h2zm0 10v-3l4 4-4 4v-3h-2c-.82 0-1.83-.42-2.41-1l-8.6-8.59C2.8 6.21 2.3 6 2 6H0V4h2c.82 0 1.83.42 2.41 1l8.6 8.59c.2.2.7.41.99.41h2z" />
                                                </svg>
                                            </div>
                                            <div class="text-grey-darker">
                                                <svg class="w-8 h-8" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M4 5h3v10H4V5zm12 0v10l-9-5 9-5z" />
                                                </svg>
                                            </div>
                                            <div class="text-white p-8 rounded-full bg-red-light shadow-lg">
                                                <svg class="w-8 h-8" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z" />
                                                </svg>
                                            </div>
                                            <div class="text-grey-darker">
                                                <svg class="w-8 h-8" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path d="M13 5h3v10h-3V5zM4 5l9 5-9 5V5z" />
                                                </svg>
                                            </div>
                                            <div class="text-grey-darker">
                                                <svg class="w-8 h-8" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path
                                                        d="M5 4a2 2 0 0 0-2 2v6H0l4 4 4-4H5V6h7l2-2H5zm10 4h-3l4-4 4 4h-3v6a2 2 0 0 1-2 2H6l2-2h7V8z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-8 py-4">
                                    <div class="flex justify-between text-sm text-grey-darker">
                                        <p>0:40</p>
                                        <p>4:20</p>
                                    </div>
                                    <div class="mt-1">
                                        <div class="h-1 bg-grey-dark rounded-full">
                                            <div class="w-1/5 h-1 bg-red-light rounded-full relative">
                                                <span
                                                    class="w-4 h-4 bg-red absolute pin-r pin-b -mb-1 rounded-full shadow"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="bg-white p-6">
                <div class="flex items-center justify-center my-2">
                    <h3 class="text-3xl font-semibold font-custom border-b-2 pb-2 border-red-500">Photo Gallery</h3>
                </div>
            </div>
        </div>
        <div class="grid sm:grid-cols-1 gap-4 sm:mt-6">
            <div class=" sm:p-6">
                <div class="flex items-center justify-center my-8">
                    <h3 class="text-3xl font-semibold font-custom border-b-2 pb-2 border-red-500">Latest Video</h3>
                </div>
                <div class="owl-carousel owl-theme owl-loaded mt-8">
                    <div class="plyr__video-embed relative h-0 overflow-hidden max-w-full" id="player">
                        <iframe src="https://www.youtube.com/embed/bTqVqk7FSmY" allowfullscreen allowtransparency
                            allow="autoplay">
                        </iframe>
                    </div>
                    <div class="plyr__video-embed" id="player">
                        <iframe src="https://www.youtube.com/embed/FUiu-cdu6mA" allowfullscreen allowtransparency
                            allow="autoplay">
                        </iframe>
                    </div>
                    <div class="plyr__video-embed" id="player">
                        <iframe
                            src="https://www.youtube.com/embed/bTqVqk7FSmY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                            allowfullscreen allowtransparency allow="autoplay"></iframe>
                    </div>
                    <div class="plyr__video-embed" id="player">
                        <iframe
                            src="https://www.youtube.com/embed/bTqVqk7FSmY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                            allowfullscreen allowtransparency allow="autoplay"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="-mt-72">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#EF4444" fill-opacity="1"
                d="M0,96L18.5,80C36.9,64,74,32,111,16C147.7,0,185,0,222,42.7C258.5,85,295,171,332,186.7C369.2,203,406,149,443,128C480,107,517,117,554,106.7C590.8,96,628,64,665,69.3C701.5,75,738,117,775,149.3C812.3,181,849,203,886,202.7C923.1,203,960,181,997,149.3C1033.8,117,1071,75,1108,48C1144.6,21,1182,11,1218,5.3C1255.4,0,1292,0,1329,26.7C1366.2,53,1403,107,1422,133.3L1440,160L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z">
            </path>
        </svg>
    </div>
</x-app-layout>

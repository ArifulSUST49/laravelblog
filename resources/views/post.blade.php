<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>




    <div class="py-12">

        <form action="{{route('post_create')}}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-gray-800 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h2
                            class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight  p-10 m-auto text-align-centre">
                            Create Post
                        </h2>
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white my3">Title
                        </label>
                        <input id="title" rows="4" col="10" name="title"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Title ">

                        <label for="body" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body
                        </label>
                        <textarea id="body" rows="4" col="10" name="body"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Leave a post......"></textarea>

                        <label for="image"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white my3">image
                        </label>
                        <input id="image" rows="4" col="10" name="image" type="file" 
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control"
                            >

                        


                    </div>


                    <div class="p-6 text-gray-200 dark:text-gray">

                        <input type="submit"
                            class="shadow bg-green-800 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                            value="Post">


                    </div>
                </div>
                @if(session()->has('status'))
                <div class="mt-5 shadow bg-purple-500 text-white font-bold py-2 px-4 rounded">
                    {{session('status')}}
                </div>
                @endif
            </div>
        </form>
    </div>

</x-app-layout>
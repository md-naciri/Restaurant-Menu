<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-5">                            
                        <form class="mt-7" action="{{route("updateMenu")}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="">
                                <div class="relative z-0 w-full mb-6 group">
                                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                                    <select name="day" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Choose a day</option>
                                        @foreach ($menu as $day)
                                        <option value="{{$day->id}}">{{$day->day}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="items-center mb-4">
                                    @foreach ($data as $dish)
                                    <input name="menu[]" id="default-checkbox" type="checkbox" value="{{$dish->name}}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="default-checkbox" class="ml-1 mr-8 text-sm font-medium text-gray-900 dark:text-gray-300 ">{{$dish->name}}</label>
                                    @endforeach
                                </div>
                            </div>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

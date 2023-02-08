<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}
                    

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 ">
                            <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white">
                                Our Dishes at RestauCode
                                <p class="mt-1 text-sm font-normal text-gray-500 ">Discover a selection of dishes at RestauCode, created to tantalize your taste buds and provide you with a memorable dining experience. Enjoy a range of flavors and textures, expertly crafted by our chefs to bring you the best in cuisine.</p>
                            </caption>
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Image
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-right">
                                        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 text-center"><a href="{{route('create')}}">Add</a></button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $dish)
                                <tr class="bg-white border-b ">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                        {{$dish->id}}
                                    </th>
                                    <td class="px-6 py-4">
                                        <img src="/images/{{$dish->photo}}" width="75px" alt="">
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$dish->name}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$dish->desc}}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 mr-4  hover:underline">Edit</a>
                                        <a href="{{route('delete', $dish->id)}}" class="font-medium text-rose-600  hover:underline">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

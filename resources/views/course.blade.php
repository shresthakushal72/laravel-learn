<x-frontend-layout>

    <section class="py-10">
        <h1 class="text-center text-2xl font-semibold mb-5">Courses</h1>
        <div class="container mx-auto">
            <form action="/save-cource" method="post" enctype="multipart/form-data"
                class="bg-white shadow-2xl rounded-lg p-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block font-medium">Enter Course Name <span class="text-red-600">*</span></label>
                        <input type="text" name="name" id="name"
                            class="w-full mt-2 p-2 rounded border border-gray-300 bg-gray-100 focus:border-blue-500 focus:ring 
                            focus:ring-blue-200 focus:outline-none" required/>
                    </div>

                    <div>
                        <label for="price" class="block font-medium">Enter Course Price <span class="text-red-600">*</span></label>
                        <input type="text" name="price" id="price"
                            class="w-full mt-2 p-2 rounded border border-gray-300 bg-gray-100 focus:border-blue-500 focus:ring 
                            focus:ring-blue-200 focus:outline-none" required/>
                    </div>

                    <div>
                        <label for="duration" class="block font-medium">Enter Course Duration <span class="text-red-600">*</span></label>
                        <input type="number" name="duration" id="duration"
                            class="w-full mt-2 p-2 rounded border border-gray-300 bg-gray-100 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none" />
                    </div>

                    <div>
                        <label for="image" class="block font-medium">Enter Course Image <span class="text-red-600">*</span></label>
                        <input type="file" name="image" id="image"
                            class="w-full mt-2 p-2 rounded border border-gray-300 bg-gray-100 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none" />
                    </div>
                </div>

                <div class="flex justify-start mt-6">
                    <button type="submit"
                        class="py-2 px-6 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:ring focus:ring-blue-200">
                        Submit
                </button>
                </div>
            </form>
        </div>
    </section>

    <section class="py-10">
        <div class="container mx-auto">
            <h2 class="text-xl font-semibold mb-5">Course List</h2>
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="py-3 px-6 text-left">Course Name</th>
                        <th class="py-3 px-6 text-left">Price</th>
                        <th class="py-3 px-6 text-left">Duration</th>
                        <th class="py-3 px-6 text-left">Image</th>
                        <th class="py-3 px-6 text-left">Edit</th>
                        <th class="py-3 px-6 text-left">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-4 px-6">{{ $course->name }}</td>
                            <td class="py-4 px-6">{{ $course->price }}</td>
                            <td class="py-4 px-6">{{ $course->duration }} days</td>
                            <td class="py-4 px-6">
                                @if ($course->image)
                                    <img src="{{ asset($course->image) }}" alt="{{ $course->name }}"
                                        class="w-16 h-auto rounded">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td class="py-4 px-6">
                               <form action="/course/{{$course->id}}/update" method="post" class="text-blue-500 hover:text-blue-700">
                            @csrf
                            @method('update')
                            Edit
                            </form>
                            </td>
                            <td class="py-4 px-6">
                                <form action="/delete-course/{{ $course->id }}" method="post" class="text-blue-500 hover:text-blue-700"><button>Delete</button>
                                @csrf
                                @method('delete')
                                </form>   
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

</x-frontend-layout>

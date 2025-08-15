<x-frontend-layout>

    <section class="py-10">
        <h1 class="text-center text-2xl font-semibold mb-5">Demo</h1>
        <div class="container mx-auto">
            <form action="/demo-save" method="post" enctype="multipart/form-data"
                class="bg-white shadow-2xl rounded-lg p-8">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block font-medium">Demo Name <span class="text-red-600">*</span></label>
                        <input type="text" name="name" id="name"
                            class="w-full mt-2 p-2 rounded border border-gray-300 bg-gray-100 focus:border-blue-500 focus:ring 
                            focus:ring-blue-200 focus:outline-none" required/>
                    </div>

                    <div>
                        <label for="price" class="block font-medium">Demo Price <span class="text-red-600">*</span></label>
                        <input type="text" name="price" id="price"
                            class="w-full mt-2 p-2 rounded border border-gray-300 bg-gray-100 focus:border-blue-500 focus:ring 
                            focus:ring-blue-200 focus:outline-none" required/>
                    </div>

                    <div>
                        <label for="duration" class="block font-medium">Demo Duration <span class="text-red-600">*</span></label>
                        <input type="number" name="duration" id="duration"
                            class="w-full mt-2 p-2 rounded border border-gray-300 bg-gray-100 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none" />
                    </div>

                    <div>
                        <label for="image" class="block font-medium">Demo Image <span class="text-red-600">*</span></label>
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

</x-frontend-layout>

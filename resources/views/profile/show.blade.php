

<x-app-layout>


    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-gray-900 overflow-hidden shadow-sm  ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $user->username }}'s Profile

                    <p> Este es el mail bobo:  {{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

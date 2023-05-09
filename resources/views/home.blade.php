<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container mx-auto mt-6 flex justify-center">
        <div class="w-full lg:w-2/3">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">ToDoList</label>
                <form action="{{ route('store') }}" method="POST" class="mt-4">
                    @csrf
                    <div class="flex items-center">
                        <label class="block text-gray-700 font-bold mr-4" for="content">
                            Add Task:
                        </label>
                        <div class="flex flex-col items-end w-full">
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-center"
                                name="content" id="content" type="text" placeholder="Add your new ToDo"
                                autocomplete="off">
                            @error('content')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2"
                                type="submit" style="width: 25%;align-self: center;">
                                Add
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="col-span-1 lg:col-span-1">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @if (count($todolists))
                <div
                    class="task-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                    @foreach ($todolists as $todolist)
                        <div class="w-full shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            <form action="{{ route('destroy', $todolist->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <div class="flex flex-wrap justify-between">
                                    <p class="block text-gray-700 font-bold mb-2 truncate">{{ $todolist->content }}</p>
                                    <button
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                        type="submit">
                                        Del
                                    </button>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <p class="text-center">You have {{ count($todolists) }} pending task</p>
                </div>
            @else
                <p class="text-center mt-3">No Task</p>
            @endif
        </div>
    </div>

    <style>
        .custom-margin {
            margin-top: 0.5rem;
        }

        .task-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30%, 1fr));
            gap: 1rem;
        }
    </style>

</body>

</html>

<div>
    @livewire('comp.menu')

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-0 md:gap-6">
            <div class="mt-5 md:mt-0 md:col-span-2">
                {{-- $book --}}
                <form wire:submit.prevent='save' action="#" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                    
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Titulo</label>
                                    <input wire:model='book.name' type="text" name="name" id="name" autocomplete="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    
                                    @if ($errors->has('book.name'))
                                        <p class="text-red-500 text-xs italic">
                                           {{ $errors->first('book.name') }}
                                        </p>
                                    @endif

                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="pages" class="block text-sm font-medium text-gray-700">Number Pages</label>
                                    <input wire:model='book.pages' type="number" name="pages" id="pages" autocomplete="pages" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                    @if ($errors->has('book.pages'))
                                        <p class="text-red-500 text-xs italic">
                                           {{ $errors->first('book.pages') }}
                                        </p>
                                    @endif


                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                                    <input wire:model='book.author' type="text" name="author" id="author" autocomplete="author" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                    @if ($errors->has('book.author'))
                                        <p class="text-red-500 text-xs italic">
                                           {{ $errors->first('book.author') }}
                                        </p>
                                    @endif

                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input wire:model='book.email' type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                    @if ($errors->has('book.email'))
                                        <p class="text-red-500 text-xs italic">
                                           {{ $errors->first('book.email') }}
                                        </p>
                                    @endif

                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                    <select wire:model='book.status' name="status" id="status" autocomplete="status" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        <option value="1" selected>Active</option>
                                        <option value="0">Deactivated</option>
                                    </select>

                                    @if ($errors->has('book.status'))
                                        <p class="text-red-500 text-xs italic">
                                           {{ $errors->first('book.status') }}
                                        </p>
                                    @endif

                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="user_id" class="block text-sm font-medium text-gray-700">Usuário</label>
                                    <input wire:model='book.user_id' type="text" name="user_id" id="user_id" autocomplete="user_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                    @if ($errors->has('book.user_id'))
                                        <p class="text-red-500 text-xs italic">
                                           {{ $errors->first('book.user_id') }}
                                        </p>
                                    @endif

                                </div>

                            </div>
                        </div>

                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">

                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                            
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

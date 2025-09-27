<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar Equipo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-6">Nuevo Equipo</h1>

                <form action="{{ route('equipo.store') }}" method="POST" class="max-w-md mx-auto">
                    @csrf

                    <!-- Marca -->

                    <div class="relative z-0 w-full mb-5 group">
                        <select name="MARCA" id="MARCA"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                                border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option value="MARCA1">ASUS</option>
                            <option value="MARCA2">Hp</option>
                            <option value="MARCA3">Lenovo</option>
                            <option value="MARCA4">Dell</option>
                        </select>
                        <label for="MARCA" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform 
                               -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 
                               peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                               peer-focus:scale-75 peer-focus:-translate-y-6">
                            Marca
                        </label>
                    </div>

                    <!-- Referencia -->

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="REFERENCIA" id="REFERENCIA"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                               border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="REFERENCIA" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform 
                               -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 
                               peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                               peer-focus:scale-75 peer-focus:-translate-y-6">
                            Referencia
                        </label>
                    </div>

                    <!-- Color -->
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="COLOR" id="COLOR"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                               border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="COLOR" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform 
                               -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 
                               peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                               peer-focus:scale-75 peer-focus:-translate-y-6">
                            Color
                        </label>
                    </div>

                    <!-- Tipo de Referencia -->
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="TIPO_REFERENCIA" id="TIPO_REFERENCIA"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                               border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="TIPO_REFERENCIA" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform 
                               -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 
                               peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                               peer-focus:scale-75 peer-focus:-translate-y-6">
                            Tipo de Referencia
                        </label>
                    </div>

                    <!-- Numero de Referencia -->
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="int" name="NUM_REFERENCIA" id="NUM_REFERENCIA"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                               border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="NUM_REFERENCIA" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform 
                               -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 
                               peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                               peer-focus:scale-75 peer-focus:-translate-y-6">
                            Numero de Referencia
                        </label>
                    </div>

                    <!-- Nombre Propietario -->
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="NOMBRE_PROPIETARIO" id="NOMBRE_PROPIETARIO"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 
                               border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="NOMBRE_PROPIETARIO" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform 
                               -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:text-blue-600 
                               peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                               peer-focus:scale-75 peer-focus:-translate-y-6">
                            Nombre del Propietario
                        </label>
                    </div>

                    <!-- Botón Guardar -->
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                            focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                        Guardar
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
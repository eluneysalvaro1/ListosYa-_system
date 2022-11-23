<x-app-layout>
 
    @php
        $count = 0;
    @endphp

@include('categories.delete')
    <div class="mx-5">
        <div class="min-w-screen  bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div style="overflow-x: scroll; margin: 3rem" class="lg:w-5/6">
                <div class="flow-root mt-5">
                    <button
                        class="float-right block focus:outline-none text-white  bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-green-900 "
                        type="button"> <a href=" {{ route('categories.create') }} ">Crear categoria</a></button>
                </div>
                <div  class="bg-white shadow-md rounded my-6">
                    
                    <table  class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-center">Id</th>
                                <th class="py-3 px-6 text-center">Categoria</th>
                                <th class="py-3 px-6 text-center">Descripcion</th>
                                <th class="py-3 px-6 text-right">Acciones</th>
                            </tr>
                        </thead>
                        @forelse ($categories as $category)
                            @if ($count % 2 == 0)
                                <tbody class="text-gray-800 text-sm font-light bg-white">
                                @else
                                <tbody class="text-gray-800 text-sm font-light bg-gray-100">
                            @endif
                            @php
                                $count++;
                            @endphp
                            <tr class="border-b border-gray-200 hover:bg-gray-200">
                                
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $category->id }}</td>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $category->name }}
                                     
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap text-center">{{ $category->description }}
                                </td>
                                <td class="py-3 flex px-6 text-left whitespace-nowrap justify-end">
                                    <button class="block focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900" type="button" data-modal-toggle="modal{{$category->id}}">Editar</button>
                                    
                                    <button type="button"  
                                    onclick="clickAcepts({{$category->id}})"  
                                    class="block focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-2 py-1 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                    Borrar</button> 
                                </td>

                            </tr>
                            </tbody>
                            @include('categories.edit', ['category' => $category])
                        @empty
                        @endforelse
                    </table>
                </div>
                <button data-modal-toggle="popup"  class="hidden" id="deleteButton"></button>
            </div>
            
        </div>
        {{ $categories->links() }}


        <script type="text/javascript">
            window.CSRF_TOKEN = '{{ csrf_token() }}';
        </script>

        <script>
           
        
            function clickAcepts(ele){
                let buttonDelete = document.getElementById('deleteButton'),
                    buttonAcept = document.getElementById('buttonAcept'),
                    alert = document.getElementById('alert')

                    buttonAcept.removeAttribute('disabled')    

                    alert.textContent = '¿Está seguro de querer borrar la siguiente categoria?'
                buttonDelete.click()


                let data = fetch(`../categories/delete/${ele}` , {
                                                                        method: 'POST',
                                                                        cache: 'no-cache',
                                                                        headers: {
                                                                            "X-CSRF-TOKEN": window.CSRF_TOKEN,
                                                                        }})
                                .then((response) => response.json())
                                .then((data) => {
                                    
                                        console.log(data)
                                        if (data !== '0') {
                                            alert.textContent = `Usted no puede borrar la siguiente categoria porque tiene un total de ${data} programas relacionados. Borrelos primero para poder borrar la categoria`
                                            buttonAcept.setAttribute('disabled', '')                                            
                                        }else{
                                            buttonAcept.addEventListener('click' , e => {
                                                let data = fetch(`../categories/destroy/${ele}` , {
                                                                        method: 'POST',
                                                                        cache: 'no-cache',
                                                                        headers: {
                                                                            "X-CSRF-TOKEN": window.CSRF_TOKEN,
                                                                        }})
                                                .then((response) => response.json())
                                                .then((data) => {
                                                    console.log(data)
                                                    location.reload()
                                                });
                    
                                            })
                                        }
                                    
                                });

                
            }
        </script>
        
</x-app-layout>

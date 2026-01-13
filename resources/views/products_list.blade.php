<x-app-layout>
    <style>
        /* Wolley Brending */
        .butik-header {
            background-color: #ffc0b0 !important;
            padding-top: 30px !important;
            padding-bottom: 30px !important;
        }
        .butik-main-bg { background-color: #f3f4f6 !important; }
        .butik-title {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            font-size: 50px !important;
            font-weight: bold;
            font-style: italic;
            color: black;
        }
        /* Stil tabele */
        .wolley-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border: 3px solid black;
        }
        .wolley-table th {
            background-color: #ffc0b0;
            border: 2px solid black;
            padding: 12px;
            font-family: 'Comic Sans MS', sans-serif;
        }
        .wolley-table td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        .butik-btn-sm {
            background-color: #5df060;
            border: 2px solid black;
            padding: 5px 15px;
            font-weight: bold;
            font-family: 'Comic Sans MS', sans-serif;
        }
    </style>

    <x-slot name="header">
        <div class="butik-header -mx-4 sm:-mx-6 lg:-mx-8 -mt-6 border-b-4 border-black">
            <h2 class="text-center butik-title">
                Katalog Proizvoda
            </h2>
        </div>
    </x-slot>

    <div class="py-12 butik-main-bg min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-6">
                <a href="{{ route('dashboard') }}" class="text-blue-600 underline">← Nazad na Dashboard</a>
            </div>

            <div class="bg-white overflow-hidden shadow-xl p-6 border-2 border-black">
                <table class="wolley-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Naziv</th>
                            <th>Cena</th>
                            <th>Akcija</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }} RSD</td>
                            <td>
                                <button class="butik-btn-sm" onclick="alert('Narudžbina poslata!')">Kupi</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>

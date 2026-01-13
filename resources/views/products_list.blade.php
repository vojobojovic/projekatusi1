<x-app-layout>
    <style>
        .butik-header { background-color: #ffc0b0 !important; padding: 30px !important; }
        .butik-title { font-family: 'Comic Sans MS'; font-size: 40px; font-weight: bold; }
        .butik-main-bg { background-color: #f3f4f6 !important; }

        .wolley-table { width: 100%; border-collapse: collapse; background: white; border: 3px solid black; }
        .wolley-table th { background-color: #ffc0b0; border: 2px solid black; padding: 12px; font-family: 'Comic Sans MS'; }
        .wolley-table td { border: 1px solid black; padding: 10px; text-align: center; font-family: 'Comic Sans MS'; }

        /* Različite boje za CRUD dugmiće */
        .btn-wolley { border: 2px solid black; padding: 5px 12px; font-weight: bold; cursor: pointer; text-decoration: none; display: inline-block; margin: 2px; font-size: 14px; transition: 0.2s; }
        .btn-wolley:hover { transform: scale(1.05); filter: brightness(90%); }

        .btn-view { background-color: #60a5fa; color: black; } /* Plava - Detalji */
        .btn-edit { background-color: #fbbf24; color: black; } /* Žuta - Izmeni */
        .btn-delete { background-color: #ef4444; color: white; border: 2px solid black; } /* Crvena - Obriši */
        .btn-add { background-color: #5df060; padding: 10px 20px; font-size: 18px; margin-bottom: 20px; color: black; } /* Zelena - Dodaj */
    </style>

    <x-slot name="header">
        <div class="butik-header -mx-4 sm:-mx-6 lg:-mx-8 -mt-6 border-b-4 border-black">
            <h2 class="text-center butik-title">Upravljanje Katalogom</h2>
        </div>
    </x-slot>

    <div class="py-12 butik-main-bg min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-between items-center mb-6">
                <a href="{{ route('dashboard') }}" class="font-bold underline" style="font-family: 'Comic Sans MS';">← Nazad na Dashboard</a>

                <a href="{{ route('product.create') }}" class="btn-wolley btn-add">+ Dodaj novi proizvod</a>
            </div>

            @if(session('success'))
                <div style="background-color: #d1fae5; color: #065f46; padding: 15px; border: 2px solid #059669; margin-bottom: 20px; font-family: 'Comic Sans MS';">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-xl p-6 border-2 border-black">
                <table class="wolley-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Naziv</th>
                            <th>Cena</th>
                            <th>Kategorija</th>
                            <th>Akcije</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><strong>{{ $product->name }}</strong></td>
                            <td>{{ number_format($product->price, 2) }} RSD</td>

                            <td>{{ $product->category->name ?? 'Nema kategorije' }}</td>

                            <td>
                                <a href="{{ route('product.show', $product->id) }}" class="btn-wolley btn-view">Detalji</a>

                                <a href="{{ route('product.edit', $product->id) }}" class="btn-wolley btn-edit">Izmeni</a>

                                <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-wolley btn-delete" onclick="return confirm('Brate, jesi siguran da želiš da obrišeš {{ $product->name }}?')">
                                        Obriši
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

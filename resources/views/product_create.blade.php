<x-app-layout>
    <style>
        .wolley-container {
            background-color: white;
            padding: 40px;
            border: 4px solid black;
            max-width: 600px;
            margin: 50px auto;
            box-shadow: 10px 10px 0px black;
        }
        .wolley-label {
            font-family: 'Comic Sans MS';
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .wolley-input {
            width: 100%;
            background-color: #d1d5db !important;
            border: 2px solid black !important;
            padding: 12px;
            margin-bottom: 20px;
            font-family: 'Comic Sans MS';
            font-weight: bold;
        }
        .btn-save {
            background-color: #5df060;
            border: 3px solid black;
            padding: 15px 40px;
            font-weight: bold;
            font-family: 'Comic Sans MS';
            font-size: 20px;
            cursor: pointer;
            display: block;
            width: 100%;
            transition: 0.2s;
        }
        .btn-save:hover { background-color: #4cdb4f; transform: translateY(-3px); }
    </style>

    <div class="wolley-container">
        <h2 style="font-family: 'Comic Sans MS'; font-size: 28px; font-weight: bold; margin-bottom: 30px; text-align: center;">
            Novi artikal u Butiku
        </h2>

        <form action="{{ route('product.store') }}" method="POST">
            @csrf

            <label class="wolley-label">Naziv proizvoda:</label>
            <input type="text" name="name" placeholder="npr. Svilena košulja" class="wolley-input" required>

            <label class="wolley-label">Opis (opciono):</label>
            <textarea name="description" placeholder="Kratak opis artikla..." class="wolley-input" rows="3"></textarea>

            <label class="wolley-label">Cena (RSD):</label>
            <input type="number" name="price" placeholder="npr. 4500" class="wolley-input" required>

            <label class="wolley-label">Kategorija:</label>
            <select name="category_id" class="wolley-input" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn-save">DODAJ U KATALOG</button>

            <div style="text-align: center; margin-top: 20px;">
                <a href="{{ route('product.index') }}" style="font-family: 'Comic Sans MS'; text-decoration: underline; color: black;">Odustani i vrati se</a>
            </div>
        </form>
    </div>
</x-app-layout>

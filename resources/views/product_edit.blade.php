<x-app-layout>
    <style>
        .wolley-container {
            background-color: white;
            padding: 40px;
            border: 4px solid black;
            max-width: 600px;
            margin: 50px auto;
            box-shadow: 10px 10px 0px #fbbf24; /* Žuta senka za Edit */
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
        .btn-update {
            background-color: #fbbf24; /* Žuta boja kao dugme u tabeli */
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
        .btn-update:hover { background-color: #e5ac1f; transform: translateY(-3px); }
    </style>

    <div class="wolley-container">
        <h2 style="font-family: 'Comic Sans MS'; font-size: 28px; font-weight: bold; margin-bottom: 30px; text-align: center;">
            Izmeni artikal: {{ $product->name }}
        </h2>

        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label class="wolley-label">Naziv proizvoda:</label>
            <input type="text" name="name" value="{{ $product->name }}" class="wolley-input" required>

            <label class="wolley-label">Opis:</label>
            <textarea name="description" class="wolley-input" rows="3">{{ $product->description }}</textarea>

            <label class="wolley-label">Cena (RSD):</label>
            <input type="number" name="price" value="{{ $product->price }}" class="wolley-input" required>

            <label class="wolley-label">Kategorija:</label>
            <select name="category_id" class="wolley-input" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="btn-update">SAČUVAJ IZMENE</button>

            <div style="text-align: center; margin-top: 20px;">
                <a href="{{ route('product.index') }}" style="font-family: 'Comic Sans MS'; text-decoration: underline; color: black;">Odustani</a>
            </div>
        </form>
    </div>
</x-app-layout>

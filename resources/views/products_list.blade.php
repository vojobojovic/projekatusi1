<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <title>Katalog Proizvoda</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 40px; background-color: #f8f9fa; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #333; border-bottom: 2px solid #3490dc; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #3490dc; color: white; }
        tr:hover { background-color: #f1f1f1; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📦 Katalog Proizvoda</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Naziv</th>
                    <th>Cena</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->price, 2) }} RSD</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Nema proizvoda u bazi. Pokreni seeder!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>

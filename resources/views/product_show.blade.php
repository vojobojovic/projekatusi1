<x-app-layout>
    <div style="padding: 40px; font-family: 'Comic Sans MS';">
        <div style="background: white; border: 4px solid black; padding: 30px; max-width: 600px; margin: 0 auto; box-shadow: 10px 10px 0px #60a5fa;">

            <h1 style="font-size: 32px; font-weight: bold; border-bottom: 2px solid black; margin-bottom: 20px;">
                {{ $product->name }}
            </h1>

            <p style="font-size: 18px; margin-bottom: 10px;">
                <strong>Kategorija:</strong> {{ $product->category->name ?? 'Bez kategorije' }}
            </p>

            <p style="font-size: 18px; margin-bottom: 10px;">
                <strong>Opis:</strong><br>
                {{ $product->description ?? 'Nema opisa.' }}
            </p>

            <div style="background: #ffc0b0; border: 2px solid black; display: inline-block; padding: 10px 20px; font-size: 24px; font-weight: bold; margin-top: 20px;">
                Cena: {{ number_format($product->price, 2) }} RSD
            </div>

            <div style="margin-top: 30px;">
                <a href="{{ route('product.index') }}" style="text-decoration: underline; font-weight: bold;">
                    ← Nazad u katalog
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <style>
        /* Tvoj Butik Wolley stil */
        .butik-header {
            background-color: #ffc0b0 !important;
            padding-top: 50px !important;
            padding-bottom: 50px !important;
        }

        .butik-main-bg {
            background-color: #f3f4f6 !important;
        }

        .butik-title-main {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            font-size: 70px !important;
            font-weight: bold;
            font-style: italic;
            color: black;
            text-shadow: 2px 2px 0px white;
        }

        .butik-btn {
            background-color: #5df060;
            color: black;
            font-weight: bold;
            font-style: italic;
            border: 3px solid black;
            padding: 15px 40px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            transition: 0.2s;
            cursor: pointer;
            width: 350px;
            border-radius: 0;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            text-decoration: none;
        }
        .butik-btn:hover {
            background-color: #4cd050;
            box-shadow: 6px 6px 0px black;
            transform: translateY(-2px);
        }

        .btn-container { margin-bottom: 25px; }
    </style>

    <x-slot name="header">
        <div class="butik-header -mx-4 sm:-mx-6 lg:-mx-8 -mt-6 border-b-4 border-black">
            <h2 class="text-center butik-title-main">
                Sivenje po meri
            </h2>
        </div>
    </x-slot>

    <div class="py-12 butik-main-bg min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="text-center mb-12">
                <h1 class="text-3xl font-bold font-serif mb-2">Butik Wolley Admin</h1>
                <p style="font-family: 'Comic Sans MS'; font-style: italic;">Upravljajte katalogom, korisnicima i zakazivanjima</p>
            </div>

            <div class="flex flex-col items-center">
                <div class="btn-container">
                    <a href="{{ route('product.index') }}" class="butik-btn">Katalog proizvoda</a>
                </div>

                <div class="btn-container">
                    <a href="{{ route('product.create') }}" class="butik-btn">Dodaj novi proizvod</a>
                </div>

                <div class="btn-container">
                    <a href="{{ route('appointment.index') }}" class="butik-btn">Zakazani termini</a>
                </div>

                <div class="btn-container">
                    <a href="{{ route('user.index') }}" class="butik-btn">Korisnici sistema</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

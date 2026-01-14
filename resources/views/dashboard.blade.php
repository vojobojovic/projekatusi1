<x-app-layout>
    <style>
        /* Tvoj Butik Wolley stil - Smanjen padding za podizanje sadržaja */
        .butik-header {
            background-color: #ffc0b0 !important;
            padding-top: 20px !important; /* Smanjeno sa 50px */
            padding-bottom: 20px !important; /* Smanjeno sa 50px */
        }

        .butik-main-bg {
            background-color: #f3f4f6 !important;
        }

        .butik-title-main {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            font-size: 55px !important; /* Malo smanjen font naslova */
            font-weight: bold;
            font-style: italic;
            color: black;
            text-shadow: 2px 2px 0px white;
        }

        /* Smanjeni dugmići */
        .butik-btn {
            background-color: #5df060;
            color: black;
            font-weight: bold;
            font-style: italic;
            border: 3px solid black;
            padding: 10px 30px; /* Smanjeno sa 15px 40px */
            text-align: center;
            display: inline-block;
            font-size: 18px; /* Smanjeno sa 20px */
            transition: 0.2s;
            cursor: pointer;
            width: 300px; /* Smanjeno sa 350px */
            border-radius: 0;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            text-decoration: none;
        }

        .butik-btn:hover {
            background-color: #4cd050;
            box-shadow: 6px 6px 0px black;
            transform: translateY(-2px);
        }

        .btn-container { margin-bottom: 15px; } /* Smanjen razmak između dugmića sa 25px */
    </style>

    <x-slot name="header">
        <div class="butik-header -mx-4 sm:-mx-6 lg:-mx-8 -mt-6 border-b-4 border-black">
            <h2 class="text-center butik-title-main">
                Šivenje po meri
            </h2>
        </div>
    </x-slot>

    <div class="py-6 butik-main-bg min-h-screen"> <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="text-center mb-6"> <h1 class="text-2xl font-bold font-serif mb-1">Butik Wolley Admin</h1>
                <p style="font-family: 'Comic Sans MS'; font-style: italic; font-size: 14px;">Upravljajte katalogom, korisnicima i porudžbinama</p>
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

                <div class="btn-container">
                    <a href="{{ route('order.index') }}" class="butik-btn">Porudžbine kupaca</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

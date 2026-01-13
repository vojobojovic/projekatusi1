<x-app-layout>
    <div class="py-12" style="background-color: #f3f4f6; min-h-screen; font-family: 'Comic Sans MS';">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 border-4 border-black shadow-[10px_10px_0px_0px_rgba(0,0,0,1)]">
                <h1 style="font-size: 30px; font-weight: bold; text-align: center; margin-bottom: 25px;">Novi Korisnik</h1>

                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-weight: bold;">Ime i prezime:</label>
                        <input type="text" name="name" required style="width: 100%; border: 2px solid black; padding: 10px;">
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-weight: bold;">Email adresa:</label>
                        <input type="email" name="email" required style="width: 100%; border: 2px solid black; padding: 10px;">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: bold;">Lozinka:</label>
                        <input type="password" name="password" required style="width: 100%; border: 2px solid black; padding: 10px;">
                    </div>

                    <button type="submit" style="width: 100%; background-color: #ffc0b0; color: black; padding: 15px; border: 3px solid black; font-weight: bold; font-size: 18px; cursor: pointer;">
                        KREIRAJ KORISNIKA
                    </button>
                </form>

                <div style="margin-top: 20px; text-align: center;">
                    <a href="{{ route('user.index') }}" style="text-decoration: underline;">Odustani</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

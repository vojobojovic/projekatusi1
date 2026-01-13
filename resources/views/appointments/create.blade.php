<x-app-layout>
    <div class="py-12" style="background-color: #f3f4f6; min-h-screen; font-family: 'Comic Sans MS';">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 border-4 border-black shadow-[10px_10px_0px_0px_rgba(0,0,0,1)]">
                <h1 style="font-size: 30px; font-weight: bold; text-align: center; margin-bottom: 25px;">Novi termin</h1>

                <form action="{{ route('appointment.store') }}" method="POST">
                    @csrf
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-weight: bold;">Ime kupca:</label>
                        <input type="text" name="customer_name" required style="width: 100%; border: 2px solid black; padding: 10px;">
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-weight: bold;">Tip usluge:</label>
                        <select name="service_type" required style="width: 100%; border: 2px solid black; padding: 10px;">
                            <option value="Sivenje po meri">Šivenje po meri</option>
                            <option value="Prepravka odeće">Prepravka odeće</option>
                            <option value="Dizajniranje">Dizajniranje</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: bold;">Datum i vreme:</label>
                        <input type="datetime-local" name="appointment_date" required style="width: 100%; border: 2px solid black; padding: 10px;">
                    </div>

                    <button type="submit" style="width: 100%; background-color: #4ade80; color: black; padding: 15px; border: 3px solid black; font-weight: bold; font-size: 18px; cursor: pointer;">
                        SAČUVAJ TERMIN
                    </button>
                </form>

                <div style="margin-top: 20px; text-align: center;">
                    <a href="{{ route('appointment.index') }}" style="text-decoration: underline;">Odustani</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

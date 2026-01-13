<x-app-layout>
    <div class="py-12" style="background-color: #f3f4f6; min-h-screen; font-family: 'Comic Sans MS';">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 border-4 border-black shadow-[10px_10px_0px_0px_rgba(0,0,0,1)]">
                <h1 style="font-size: 30px; font-weight: bold; text-align: center; margin-bottom: 25px;">Izmeni termin</h1>

                <form action="{{ route('appointment.update', $appointment->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-weight: bold;">Ime kupca:</label>
                        <input type="text" name="customer_name" value="{{ $appointment->customer_name }}" required
                               style="width: 100%; border: 2px solid black; padding: 10px;">
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-weight: bold;">Tip usluge:</label>
                        <select name="service_type" required style="width: 100%; border: 2px solid black; padding: 10px;">
                            <option value="Sivenje po meri" {{ $appointment->service_type == 'Sivenje po meri' ? 'selected' : '' }}>Šivenje po meri</option>
                            <option value="Prepravka odeće" {{ $appointment->service_type == 'Prepravka odeće' ? 'selected' : '' }}>Prepravka odeće</option>
                            <option value="Dizajniranje" {{ $appointment->service_type == 'Dizajniranje' ? 'selected' : '' }}>Dizajniranje</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: bold;">Datum i vreme:</label>
                        <input type="datetime-local" name="appointment_date"
                               value="{{ date('Y-m-d\TH:i', strtotime($appointment->appointment_date)) }}"
                               required style="width: 100%; border: 2px solid black; padding: 10px;">
                    </div>

                    <button type="submit" style="width: 100%; background-color: #fde047; color: black; padding: 15px; border: 3px solid black; font-weight: bold; font-size: 18px; cursor: pointer;">
                        SAČUVAJ PROMENE
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

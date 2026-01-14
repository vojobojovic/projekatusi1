<x-app-layout>
    <div class="py-12" style="background-color: #f3f4f6; min-h-screen; font-family: 'Comic Sans MS';">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 border-4 border-black shadow-[10px_10px_0px_0px_rgba(0,0,0,1)]">
                <h1 style="font-size: 30px; font-weight: bold; text-align: center; margin-bottom: 25px;">Izmeni status</h1>

                <form action="{{ route('order.update', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div style="margin-bottom: 15px;">
                        <p><strong>Kupac:</strong> {{ $order->customer_name }}</p>
                        <p><strong>Proizvod:</strong> {{ $order->product_name }}</p>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: bold;">Status porudžbine:</label>
                        <select name="status" style="width: 100%; border: 2px solid black; padding: 10px;">
                            <option value="Na čekanju" {{ $order->status == 'Na čekanju' ? 'selected' : '' }}>Na čekanju</option>
                            <option value="Poslato" {{ $order->status == 'Poslato' ? 'selected' : '' }}>Poslato</option>
                            <option value="Završeno" {{ $order->status == 'Završeno' ? 'selected' : '' }}>Završeno</option>
                        </select>
                    </div>

                    <button type="submit" style="width: 100%; background-color: #fde047; color: black; padding: 15px; border: 3px solid black; font-weight: bold; font-size: 18px; cursor: pointer;">
                        AŽURIRAJ STATUS
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

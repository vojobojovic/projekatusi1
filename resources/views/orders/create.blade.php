<x-app-layout>
    <div class="py-12" style="background-color: #f3f4f6; min-h-screen; font-family: 'Comic Sans MS';">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-8 border-4 border-black shadow-[10px_10px_0px_0px_rgba(0,0,0,1)]">
                <h1 style="font-size: 30px; font-weight: bold; text-align: center; margin-bottom: 25px;">Nova Porudžbina</h1>

                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-weight: bold;">Ime kupca:</label>
                        <input type="text" name="customer_name" required style="width: 100%; border: 2px solid black; padding: 10px;">
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-weight: bold;">Proizvod:</label>
                        <input type="text" name="product_name" required style="width: 100%; border: 2px solid black; padding: 10px;">
                    </div>

                    <div style="display: flex; gap: 10px; margin-bottom: 20px;">
                        <div style="flex: 1;">
                            <label style="font-weight: bold;">Količina:</label>
                            <input type="number" name="quantity" value="1" style="width: 100%; border: 2px solid black; padding: 10px;">
                        </div>
                        <div style="flex: 1;">
                            <label style="font-weight: bold;">Cena (RSD):</label>
                            <input type="number" step="0.01" name="price" style="width: 100%; border: 2px solid black; padding: 10px;">
                        </div>
                    </div>

                    <button type="submit" style="width: 100%; background-color: #4ade80; color: black; padding: 15px; border: 3px solid black; font-weight: bold; font-size: 18px; cursor: pointer;">
                        SAČUVAJ PORUDŽBINU
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

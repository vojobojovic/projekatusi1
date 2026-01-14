<x-app-layout>
    <div class="py-12" style="background-color: #f3f4f6; min-h-screen; font-family: 'Comic Sans MS';">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-6 border-2 border-black">

                <h1 style="font-size: 35px; font-weight: bold; text-align: center; margin-bottom: 20px;">
                    Porudžbine Kupaca
                </h1>

                <div style="text-align: right; margin-bottom: 20px;">
                    <a href="{{ route('order.create') }}"
                       style="background-color: #4ade80; color: black; padding: 10px 20px; border: 3px solid black; font-weight: bold; text-decoration: none; display: inline-block;">
                       + Nova Porudžbina
                    </a>
                </div>

                <table style="width: 100%; border-collapse: collapse; border: 3px solid black;">
                    <thead>
                        <tr style="background-color: #ffc0b0;"> <th style="border: 2px solid black; padding: 10px;">Kupac</th>
                            <th style="border: 2px solid black; padding: 10px;">Proizvod</th>
                            <th style="border: 2px solid black; padding: 10px;">Količina</th>
                            <th style="border: 2px solid black; padding: 10px;">Status</th>
                            <th style="border: 2px solid black; padding: 10px;">Akcije</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($orders as $order)
                            <tr>
                                <td style="border: 1px solid black; padding: 10px; text-align: center;">{{ $order->customer_name }}</td>
                                <td style="border: 1px solid black; padding: 10px; text-align: center;">{{ $order->product_name }}</td>
                                <td style="border: 1px solid black; padding: 10px; text-align: center;">{{ $order->quantity }}</td>
                                <td style="border: 1px solid black; padding: 10px; text-align: center;">
                                    <span style="background-color: #eee; padding: 2px 8px; border: 1px solid black;">
                                        {{ $order->status }}
                                    </span>
                                </td>
                                <td style="border: 1px solid black; padding: 10px; text-align: center;">
                                    <div style="display: flex; justify-content: center; gap: 10px;">
                                        <a href="{{ route('order.edit', $order->id) }}"
                                           style="background-color: #fde047; color: black; padding: 5px 10px; border: 2px solid black; font-weight: bold; text-decoration: none;">
                                            Izmeni
                                        </a>
                                        <form action="{{ route('order.destroy', $order->id) }}" method="POST" onsubmit="return confirm('Obrisati porudžbinu?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" style="background-color: #ff4d4d; color: white; padding: 5px 10px; border: 2px solid black; font-weight: bold;">
                                                Ukloni
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" style="border: 1px solid black; padding: 20px; text-align: center; font-style: italic;">
                                    Trenutno nema porudžbina.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div style="margin-top: 20px; text-align: center;">
                    <a href="{{ route('dashboard') }}" style="text-decoration: underline; font-weight: bold;">← Nazad na Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

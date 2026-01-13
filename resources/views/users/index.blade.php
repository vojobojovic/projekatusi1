<x-app-layout>
    <div class="py-12" style="background-color: #f3f4f6; min-h-screen; font-family: 'Comic Sans MS';">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-6 border-2 border-black">
                <h1 style="font-size: 35px; font-weight: bold; text-align: center; margin-bottom: 20px;">
                    Korisnici Sistema
                </h1>

                <div style="text-align: right; margin-bottom: 20px;">
                    <a href="{{ route('user.create') }}"
                       style="background-color: #4ade80; color: black; padding: 10px 20px; border: 3px solid black; font-weight: bold; text-decoration: none; display: inline-block;">
                       + Dodaj novog korisnika
                    </a>
                </div>

                <table style="width: 100%; border-collapse: collapse; border: 3px solid black;">
                    <thead>
                        <tr style="background-color: #ffc0b0;"> <th style="border: 2px solid black; padding: 10px;">Ime</th>
                            <th style="border: 2px solid black; padding: 10px;">Email</th>
                            <th style="border: 2px solid black; padding: 10px;">Akcije</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td style="border: 1px solid black; padding: 10px; text-align: center;">{{ $user->name }}</td>
                                <td style="border: 1px solid black; padding: 10px; text-align: center;">{{ $user->email }}</td>
                                <td style="border: 1px solid black; padding: 10px; text-align: center; display: flex; justify-content: center; gap: 10px;">

                                    <a href="{{ route('user.edit', $user->id) }}"
                                       style="background-color: #fde047; color: black; padding: 5px 10px; border: 2px solid black; font-weight: bold; text-decoration: none;">
                                        Izmeni
                                    </a>

                                    @if(auth()->id() !== $user->id)
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Obrisati korisnika?')">
                                        @csrf @method('DELETE')
                                        <button type="submit" style="background-color: #ff4d4d; color: white; padding: 5px 10px; border: 2px solid black; font-weight: bold;">
                                            Ukloni
                                        </button>
                                    </form>
                                    @else
                                        <span style="color: gray; padding: 5px;">(Ti)</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div style="margin-top: 20px; text-align: center;">
                    <a href="{{ route('dashboard') }}" style="text-decoration: underline; font-weight: bold;">← Nazad na Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

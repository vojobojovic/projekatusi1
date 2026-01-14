<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // 1. Prikaz tabele sa svim terminima (READ)
    public function index()
    {
        $appointments = Appointment::all();

        return view('appointments.index', compact('appointments'));
    }

    // 2. Otvaranje forme za novi termin (CREATE)
    public function create()
    {
        return view('appointments.create');
    }

    // 3. Snimanje novog termina u bazu (STORE)
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'service_type' => 'required',
            'appointment_date' => 'required',
        ]);

        Appointment::create($request->all());

        return redirect()->route('appointment.index')->with('success', 'Termin uspešno zakazan!');
    }

    // 4. Otvaranje forme za izmenu postojećeg termina (EDIT)
    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);

        return view('appointments.edit', compact('appointment'));
    }

    // 5. Čuvanje izmenjenih podataka u bazi (UPDATE)
    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_name' => 'required',
            'service_type' => 'required',
            'appointment_date' => 'required',
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());

        return redirect()->route('appointment.index')->with('success', 'Termin uspešno izmenjen!');
    }

    // 6. Brisanje termina iz baze (DELETE)
    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('appointment.index')->with('success', 'Termin obrisan!');
    }
}

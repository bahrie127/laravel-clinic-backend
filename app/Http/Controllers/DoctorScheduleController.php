<?php

namespace App\Http\Controllers;

use App\Models\DoctorSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Doctor;


class DoctorScheduleController extends Controller
{
    //index
    public function index(Request $request)
    {
        $doctorSchedules = DoctorSchedule::with('doctor')
            ->when($request->input('doctor_id'), function ($query, $doctor_id) {
                return $query->where('doctor_id', $doctor_id);
            })

            ->orderBy('doctor_id', 'asc')
            ->paginate(10);
        return view('pages.doctor_schedules.index', compact('doctorSchedules'));
    }

    //create
    public function create()
    {
        $doctors = Doctor::all();
        return view('pages.doctor_schedules.create', compact('doctors'));
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required',

        ]);

        //if senin is not empty
        if ($request->senin) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Senin';
            $doctorSchedule->time = $request->senin;
            $doctorSchedule->save();
        }

        //if selasa is not empty
        if ($request->selasa) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Selasa';
            $doctorSchedule->time = $request->selasa;
            $doctorSchedule->save();
        }

        //if rabu is not empty
        if ($request->rabu) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Rabu';
            $doctorSchedule->time = $request->rabu;
            $doctorSchedule->save();
        }

        //if kamis is not empty
        if ($request->kamis) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Kamis';
            $doctorSchedule->time = $request->kamis;
            $doctorSchedule->save();
        }

        //if jumat is not empty
        if ($request->jumat) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Jumat';
            $doctorSchedule->time = $request->jumat;
            $doctorSchedule->save();
        }

        //if sabtu is not empty
        if ($request->sabtu) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Sabtu';
            $doctorSchedule->time = $request->sabtu;
            $doctorSchedule->save();
        }

        //if minggu is not empty
        if ($request->minggu) {
            $doctorSchedule = new DoctorSchedule;
            $doctorSchedule->doctor_id = $request->doctor_id;
            $doctorSchedule->day = 'Minggu';
            $doctorSchedule->time = $request->minggu;
            $doctorSchedule->save();
        }

        return redirect()->route('doctor-schedules.index')->with('success', 'Data berhasil ditambahkan');
    }

    //edit
    public function edit($id)
    {
        $doctorSchedule = DoctorSchedule::find($id);
        $doctors = Doctor::all();
        return view('pages.doctor_schedules.edit', compact('doctorSchedule', 'doctors'));
    }

    //update
    public function update(Request $request, $id)
    {
        $request->validate([
            'doctor_id' => 'required',
            'day' => 'required',
            'time' => 'required',
        ]);

        $doctorSchedule = DoctorSchedule::find($id);
        $doctorSchedule->doctor_id = $request->doctor_id;
        $doctorSchedule->day = $request->day;
        $doctorSchedule->time = $request->time;
        $doctorSchedule->status = $request->status;
        $doctorSchedule->note = $request->note;
        $doctorSchedule->save();

        return redirect()->route('doctor-schedules.index');
    }

    //destroy
    public function destroy($id)
    {
        DoctorSchedule::find($id)->delete();
        return redirect()->route('doctor-schedules.index');
    }
}

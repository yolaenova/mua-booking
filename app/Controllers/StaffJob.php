<?php

namespace App\Controllers;

use App\Models\BookingModel;

class StaffJob extends BaseController
{
    protected $booking;

    public function __construct()
    {
        $this->booking = new BookingModel();
    }

    // 🔹 Jadwal Hari Ini
    public function index()
    {
        $data['jobs'] = $this->booking
            ->select('bookings.*, services.name as service_name')
            ->join('services', 'services.id = bookings.service_id')
            ->where('booking_status !=', 'done')
            ->findAll();

        $data['title'] = 'BeautyBook | Staff Job';

        return view('staff/jobs', $data);
    }

    // 🔹 Update status jadi PROSES
    public function process($id)
    {
        $this->booking->update($id, [
            'booking_status' => 'process'
        ]);

        return redirect()->back();
    }

    // 🔹 Update status jadi SELESAI
    public function done($id)
    {
        $this->booking->update($id, [
            'booking_status' => 'done'
        ]);

        return redirect()->back();
    }

    // 🔹 Riwayat pekerjaan
    public function history()
    {
        $data['jobs'] = $this->booking
            ->select('bookings.*, services.name as service_name')
            ->join('services', 'services.id = bookings.service_id')
            ->where('booking_status', 'done')
            ->findAll();

        $data['title'] = 'BeautyBook | Riwayat';

        return view('staff/history', $data);
    }
}
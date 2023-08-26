<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use Illuminate\Support\Facades\Storage;


class AgendaController extends Controller
{
    public function hapusAgenda($id)
    {
        $agenda = Agenda::find($id);
        $agenda->delete();

        return redirect('/agendaAdmin');
    }

    public function updateAgenda(Request $request, $id)
    {

        $validateData = $request->validate([
            'tanggal_agenda' => 'required',
            'acara_agenda' => 'required',
            'kegiatan_agenda' => '',
        ]);

        $agenda           = Agenda::find($id);
        $agenda->tanggal_agenda    = $validateData['tanggal_agenda'];
        $agenda->acara_agenda  = $validateData['acara_agenda'];
        $agenda->kegiatan_agenda  = $validateData['kegiatan_agenda'];
        $agenda->save();
        return redirect('/agendaAdmin');
    }

    public function tambahAgenda(Request $request)
    {

        $validateData = $request->validate([
            'tanggal_agenda' => 'required',
            'acara_agenda' => 'required',
            'kegiatan_agenda' => '',
        ]);

        Agenda::create($validateData);

        // $guru->save();
        return redirect('/agendaAdmin');
    }
}

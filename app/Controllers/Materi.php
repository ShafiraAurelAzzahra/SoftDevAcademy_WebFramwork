<?php

namespace App\Controllers;

class Materi extends BaseController
{
    public function materiVariabel()
    {
        return view('materi/materi-variabel');
    }

    public function materiKondisi()
    {
        return view('materi/materi-kondisi');
    }

    public function MateriLooping()
    {
        return view('materi/MateriLooping');
    }

    public function MateriFungsidanProsedur()
    {
        return view('materi/MateriFungsidanProsedur');
    }

    public function MateriArray()
    {
        return view('materi/MateriArray');
    }

    public function MateriStack()
    {
        return view('materi/MateriStack');
    }

    public function MateriQueue()
    {
        return view('materi/MateriQueue');
    }

    public function MateriLinkedList()
    {
        return view('materi/MateriLinkedList');
    }

    public function MateriSortingandSearching()
    {
        return view('materi/MateriSortingandSearching');
    }

    public function MateriMatriks()
    {
        return view('materi/MateriMatriks');
    }

    public function MateriPointer()
    {
        return view('materi/MateriPointer');
    }

    public function MateriTree()
    {
        return view('materi/MateriTree');
    }
}

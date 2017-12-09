<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function getform_Gauge($m_id){
        return view('inc.formAddGauge',compact('m_id'));
    }

    public function getform_Indicator($m_id){
        return view('inc.formAddIndicator',compact('m_id'));
    }

    public function getform_ToggleButton($m_id){
        return view('inc.formAddToggleButton', compact('m_id'));
    }

    public function getform_StackIndicator($m_id){
        return view('inc.formAddStackIndicator', compact('m_id'));
    }
}

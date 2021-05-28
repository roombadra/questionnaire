<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\questionnaire;
use Illuminate\Support\Facades\DB;

class IndexComponent extends Component
{
	public $show_form = false;
	public $agent,
		   $commune,
		   $q_1,
		   $q_2,
		   $q_3,
		   $q_4,
		   $q_5,
		   $q_6,
		   $q_7,
		   $q_8,
		   $q_9,
		   $q_10,
		   $q_11,
		   $q_12;

	protected $rules = [
		'agent'=>'required|string',
		'commune'=>'required|string',
		'q_1'=>'required|string',
		'q_2'=>'required',
		'q_3'=>'required|string',
		'q_4'=>'required|string',
		'q_5'=>'required|string',
		'q_6'=>'required|string',
		'q_7'=>'required|string',
		'q_8'=>'required|string',
		'q_9'=>'required|string',
		'q_10'=>'required|string',
		'q_11'=>'required|string',
		'q_12'=>'required|string',
	];

	public function showForm()
	{
		$this->show_form = true;
	}

	public function hideForm()
	{
		$this->show_form = false;
	}

	public function createask()
	{
		$data = $this->validate();
		questionnaire::create($data);
		$this->refreshInput();
		session()->flash('message',"Le client a été ajouté!");
	}

	public function refreshInput()
	{
		$this->agent = null;
    	$this->commune = null;
    	$this->q_1 = null;
    	$this->q_2 = null;
    	$this->q_3 = null;
    	$this->q_4 = null;
    	$this->q_5 = null;
    	$this->q_6 = null;
    	$this->q_7 = null;
    	$this->q_8 = null;
    	$this->q_9 = null;
    	$this->q_10 = null;
    	$this->q_11 = null;
    	$this->q_12 = null;
    	$this->show_form = false;
	}

    public function render()
    {
    	$users = DB::table('questionnaires')->count();
        return view('livewire.index-component',['users' => $users]);
    }
}

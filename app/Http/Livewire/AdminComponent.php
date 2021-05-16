<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\questionnaire;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class AdminComponent extends Component
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';
	public $paginate = 10;

    public function render()
    {
    	$asks = DB::table('questionnaires')
        			->orderByDesc('created_at')->paginate($this->paginate);
        return view('livewire.admin-component', compact('asks'));
    }
}

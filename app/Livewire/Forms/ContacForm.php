<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ContacForm extends Form
{
    #[Validate()]
    public $nombre;
}

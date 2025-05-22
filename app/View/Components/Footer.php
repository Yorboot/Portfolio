<?php
namespace App\View\Components;

use Illuminate\View\Component;
use App\Http\Controllers\DateController;

class Footer extends Component
{
    public int $footerDate;

    public function __construct()
    {
        $this->footerDate = DateController::getCurrentYear();
    }

    public function render()
    {
        return view('components.footer');
    }
}

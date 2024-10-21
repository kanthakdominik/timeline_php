<?php
namespace App\Rules;

use App\Models\Event;
use Illuminate\Contracts\Validation\Rule;

class NoOverlappingEvent implements Rule
{
    protected $start_date;
    protected $end_date;
    protected $event_id;

    public function __construct($start_date, $end_date, $event_id = null)
    {
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->event_id = $event_id;
    }

    public function passes($attribute, $value)
    {
        return !Event::where(function ($query) {
            $query->whereBetween('start_date', [$this->start_date, $this->end_date])
                  ->orWhereBetween('end_date', [$this->start_date, $this->end_date])
                  ->orWhere(function ($query) {
                      $query->where('start_date', '<=', $this->start_date)
                            ->where('end_date', '>=', $this->end_date);
                  });
        })
        ->when($this->event_id, function ($query) {
            $query->where('id', '!=', $this->event_id);
        })
        ->exists();
    }

    public function message()
    {
        return 'Okres wydarzenia nakłada się na istniejące wydarzenie.';
    }
}
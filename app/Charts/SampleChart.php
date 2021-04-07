<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\Transaction;
use Carbon\Carbon;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $today = Carbon::now();
        
        $monthToday = $today->subMonth()->format('M');
        
        // $usdToday = Transaction::whereYear('date', $today->year)->whereMonth('date', $today->month)->currency('usd')->type('in')->sum('amount');
        // dd($usdToday);
        $month11 = $today->subMonth(1)->format('M');
        $month10 = $today->subMonth(1)->format('M');
        $month9 = $today->subMonth(1)->format('M');
        $month8 = $today->subMonth(1)->format('M');
        $month7 = $today->subMonth(1)->format('M');
        $month6 = $today->subMonth(1)->format('M');
        $month5 = $today->subMonth(1)->format('M'); 
        $month4 = $today->subMonth(1)->format('M');
        $month3 = $today->subMonth(1)->format('M');
        $month2 = $today->subMonth(1)->format('M');
        $month1 = $today->subMonth(1)->format('M');

        

        return Chartisan::build()
            ->labels([
                $month1, 
                $month2, 
                $month3, 
                $month4, 
                $month5, 
                $month6, 
                $month7, 
                $month8, 
                $month9, 
                $month10,
                $month11, 
                $monthToday, 
                ])
            ->dataset('USD', [1, 2, 3, 4])
            ->dataset('EUR', [1, 2, 2]);
    }
}




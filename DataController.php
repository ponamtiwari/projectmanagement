<?php

namespace App\Http\Controllers;

use App\Models\User; // Import your model
use Illuminate\Http\Request;
use Carbon\Carbon;

class DataController extends Controller
{
    public function index()
    {
        // Get today's date
        $today = Carbon::today();

        // Calculate start and end of this year
        $startOfYear = Carbon::parse('first day of January')->startOfDay();
        $endOfYear = Carbon::parse('last day of December')->endOfDay();

        // Calculate start and end of this week
        $startOfWeek = Carbon::now()->startOfWeek()->startOfDay();
        $endOfWeek = Carbon::now()->endOfWeek()->endOfDay();

        // Calculate start and end of this quarter
        $startOfQuarter = Carbon::now()->startOfQuarter()->startOfDay();
        $endOfQuarter = Carbon::now()->endOfQuarter()->endOfDay();

        // Fetch data based on date ranges and get counts
        $data = [
            'total' => User::count(),
            'today' => User::whereDate('created_at', $today)->count(),
            'this_year' => User::whereBetween('created_at', [$startOfYear, $endOfYear])->count(),
            'this_week' => User::whereBetween('created_at', [$startOfWeek, $endOfWeek])->count(),
            'this_quarter' => User::whereBetween('created_at', [$startOfQuarter, $endOfQuarter])->count(),
        ];

        // Return data as JSON
        return view('admin.data', compact('data'));
    }
}

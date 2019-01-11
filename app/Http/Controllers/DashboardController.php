<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;
use App\Ticket;
use App\Status;
use App\Deal;


class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function home()
    {
        $tot_projects = Project::count();
        $open_projects = Project::where('status_id', '1')->count();
        $close_projects = Project::where('status_id', '2')->count();
        $open_deals = Deal::where('status_id', '1')->count();
        $idle_deals = Deal::where('status_id', '4')->count();
        $close_deals = Deal::where('status_id', '2')->count();
        //$statuses = Status::all();
        //dd($statuses);

        return view('dashboard.dash', compact('tot_projects', 'open_projects', 'close_projects', 'open_deals', 'idle_deals', 'close_deals'));
    }
}

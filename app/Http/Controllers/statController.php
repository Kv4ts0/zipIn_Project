<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stat;

class statController extends Controller
{
    public function getFilteredStats(Request $request){
        $stats = Stat::orderBy('created_at', 'DESC');
        if($request->id != null){
            $stats->where('id', $request->id);
        }
        if($request->name != null){
            $stats->where('name', 'LIKE', '%' . $request->name . '%');
        }
        return $stats->get();
    }
    public function viewAllStat(Request $request){
        $stats = $this->getFilteredStats($request);
        return view('all-stat')->with('stats', $stats)->with('filters', [
            'id' => $request->id,
            'name' => $request->name,
        ]);
    }
    public function editStat(Request $request, $id){
        $stat = Stat::where('id', $id)->first();
        return view('edit-stat')->with('stat', $stat);
    }
    public function updateStat(Request $request, $id){
        $stat = Stat::findOrFail($id);
        $stat->name = $request->name;
        if ($request->hasFile('statimage')) {
            $name1 = $request->file('statimage')->getClientOriginalName();
            $request->file('statimage')->storeAs('public/stat', $name1);
            $stat->statimage = $name1;
        }
        $stat->number = $request->number;
        $stat->save();
        return redirect()->route('stats.all');
    }
    public function addNewStat(Request $request){
        $stat = new Stat();
        $stat->name = $request->name;
        $size1 = $request->file('statimage')->getSize();
        $name1 = $request->file('statimage')->getClientOriginalName();
        $request->file('statimage')->storeAs('public/stat', $name1);
        $stat->statimage = $name1;
        $stat->number = $request->number;
        $stat->save();
        return redirect()->route('stats.all');
    }
    public function deleteStat(Request $request){
        Stat::where('id', $request->stat_id)->delete();
        return redirect()->route('stats.all');
    }
}

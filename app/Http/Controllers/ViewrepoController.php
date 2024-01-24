<?php

namespace App\Http\Controllers;

use App\Models\Repositories;
use Illuminate\Http\Request;

class ViewrepoController extends Controller
{
    public function index($id)
    {
        $repository = Repositories::where('series', $id)->first();

        if (!$repository) {
            // Handle the case where the repository is not found
            return redirect()
                ->route('daftarapproverepo.index')
                ->with('error', 'Repository not found.');
        }

        return view('approverepo.index')->with([
            'repository' => $repository,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{
    public function getdata(Request $request)
    {
        if ($request->ajax()) {
            $data = Address::select('id', 'ip_address', 'description', 'date_added')->get();
            return Datatables::of($data)
                ->editColumn('id', function ($row) {
                    return '<input type="checkbox" name="check_data" class="checkboks form-check-input" value=' . $row->id . ' id="select' . $row->id . '">';
                })
                ->addIndexColumn()
                ->addColumn('action', function ($row) {


                    return '<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" onclick="ConfirmDelete(' . $row->id . ')" data-bs-toggle="tooltip"
                    title="delete">
                    <span class="svg-icon svg-icon-3">
                        <i class="fas fa-trash"></i>
                    </span>
                </a>';

                })

                ->rawColumns(['id', 'action'])
                ->make(true);
        } else {
            return 'Not AuthorizesRequest';
        }
    }
}

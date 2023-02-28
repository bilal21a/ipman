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
            $data = Address::latest()->get();
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
                </a>
                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" onclick="showEditForm(' . $row->id . ')" 
                    title="edit" data-bs-toggle="modal" data-bs-target="#editModal">
                    <span class="svg-icon svg-icon-3">
                        <i class="fas fa-pencil"></i>
                    </span>
                </a>
                ';
                })
                ->addColumn('date_added', function ($row) {
                    return $row->created_at->diffForHumans();
                })

                ->rawColumns(['id', 'action','date_added'])
                ->make(true);
        } else {
            return 'Not AuthorizesRequest';
        }
    }

    public function address_save(Request $request)
    {
        Address::create($request->all());
        return "address saved successfully";
        // dd($request->all());
    }
    public function address_update(Request $request)
    {
        // dd($request->all());
        Address::find($request->id)->update($request->all());
        return "address updated successfully";
    }

    public function edit_address($id)
    {
        $address=Address::find($id);
        return view('component.editform', compact('address'));
    }

    public function ip_bulk_delete(Request $request)
    {
        if ($request->ajax()) {
            foreach ($request->id as $row => $key) {
                $address = Address::find($request->id[$row]);
                $address->delete();
            }
        }
        return response()->json([
            'message' => 'Addresses Deleted Successfully!'
        ]);
    }

    public function delete_address($id)
    {
        $address = Address::find($id);
        $address->delete();
        return "deleted";
    }
}

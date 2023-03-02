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
                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" onclick="pingme(' . $row->id . ',\'ping\')" 
                    title="Ping" data-bs-toggle="modal" data-bs-target="#pingmodal">
                    <span class="svg-icon svg-icon-3">
                        <i class="fas fa-satellite-dish"></i>
                    </span>
                </a>
                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" onclick="pingme(' . $row->id . ',\'nslookup\')" 
                    title="nslookup" data-bs-toggle="modal" data-bs-target="#pingmodal">
                    <span class="svg-icon svg-icon-3">
                        <i class="fas fa-globe"></i>
                    </span>
                </a>
                ';
                })
                ->addColumn('date_added', function ($row) {
                    return $row->created_at->diffForHumans();
                })

                ->rawColumns(['id', 'action', 'date_added'])
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
        $address = Address::find($id);
        return view('component.editform', compact('address'));
    }
    public function ping_address($id, $type)
    {
        try {
            $address = Address::find($id);
            $ip = $address->ip_address;
            if ($type == 'ping') {
                if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                    // Windows
                    exec("ping -n 1 $ip", $output, $result);
                } else {
                    // Unix-based systems (including macOS)
                    exec("ping -c 1 $ip", $output, $result);
                }

                if (
                    $result == 0
                ) {
                    return "<div class='alert alert-success' role='alert'>Ping successful!</div>";
                } else {
                    return "<div class='alert alert-danger' role='alert'>Ping failed!</div>";
                }
            } else {
                $hostname = gethostbyaddr($ip);

                if ($hostname == $ip) {
                    return "<div class='alert alert-danger' role='alert'>No hostname found for $ip</div>";
                } else {
                    return "<div class='alert alert-success' role='alert'>The hostname for $ip is $hostname</div>";
                }
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class FotograferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role', 'fotografer')
                     ->orderBy('id')
                     ->paginate(10);

        return view('admin.fotografer.index', ['users' => $users]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fotografer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'nohp' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
            'isAdmin' => 'nullable|integer',
            'role' => 'nullable|string|max:255',
        ]);

        // Hash password before saving
        $validated['password'] = Hash::make($validated['password']);

        // Membuat user baru dengan data yang telah divalidasi
        User::create($validated);

        return redirect('admin-fotografer')->with('pesan', 'User  berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.fotografer.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.fotografer.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,' . $id,
            'nohp' => 'required|string',
            'password' => 'nullable|string|min:8|confirmed',
            'isAdmin' => 'nullable|integer',
            'role' => 'nullable|string|max:255',
        ]);

        // Hash password if it is provided
        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']); // Remove password from array if not provided
        }

        User::where('id', $id)->update($validated);
        return redirect('admin-fotografer')->with('pesan', 'User  berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('admin-fotografer')->with('pesan', 'User  berhasil dihapus');
    }
}

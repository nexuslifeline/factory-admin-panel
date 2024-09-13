<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use Illuminate\Http\Request;
use App\Http\Requests\FactoryRequest;


class FactoryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $factories = Factory::when($search, function ($query, $search) {
            return $query->where('factory_name', 'like', "%{$search}%")
                ->orWhere('location', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('website', 'like', "%{$search}%");
        })->paginate(10);

        return view('factories.index', [
            'factories' => $factories,
            'search' => $search
        ]);
    }

    public function create()
    {
        return view('factories.create');
    }

    public function store(FactoryRequest $request)
    {
        Factory::create($request->validated());
        return redirect()->route('factories.index')->with('success', 'Factory created successfully.');
    }

    public function show(Factory $factory)
    {
        return view('factories.show', compact('factory'));
    }

    public function edit(Factory $factory)
    {
        return view('factories.edit', compact('factory'));
    }

    public function update(FactoryRequest $request, Factory $factory)
    {
        $factory->update($request->validated());
        return redirect()->route('factories.index')->with('success', 'Factory updated successfully.');
    }

    public function destroy(Factory $factory)
    {
        $factory->delete();
        return redirect()->route('factories.index')->with('success', 'Factory deleted successfully.');
    }
}

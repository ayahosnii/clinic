<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ExpensesCategory;
use Illuminate\Http\Request;

class ExpensesCategoryController extends Controller
{
    // Display a listing of the expenses categories.
    public function index()
    {
        $categories = ExpensesCategory::all();
        return view('admin.expenses_categories.index', compact('categories'));
    }

    // Show the form for creating a new expenses category.
    public function create()
    {
        return view('admin.expenses_categories.create');
    }

    // Store a newly created expenses category in the database.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        ExpensesCategory::create($request->all());

        return redirect()->route('expenses_categories.index')
            ->with('success', 'Expenses category created successfully.');
    }

    // Show the form for editing an expenses category.
    public function edit(ExpensesCategory $category)
    {
        return view('admin.expenses_categories.edit', compact('category'));
    }

    // Update the expenses category in the database.
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $category = ExpensesCategory::find($id);

        $category->update($request->all());

        session()->flash('Add', 'Expenses Category Added Successfully');
        return redirect()->route('expenses_categories.index');
    }

    // Remove the specified expenses category from the database.
    public function destroy(Request $request)
    {
        $id = $request->id;
        ExpensesCategory::find($id)->delete();
        session()->flash('delete','Expenses Category Successfully Deleted');
        return redirect()->route('expenses_categories.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpensesCategory;
use Illuminate\Http\Request;
use Storage;


class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        return view('expenses.index', compact('expenses'));
    }

    public function create()
    {
        $categories = ExpensesCategory::get();
        return view('expenses.create', compact('categories'));
    }

    public function store(Request $request)
    {
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'expenses_name' => 'required|string',
                'description' => 'required|string',
                'amount' => 'required|numeric',
                'supplier_name' => 'required|string',
                'buyer_name' => 'required|string',
                'expense_date' => 'required|date',
                'payment_method' => 'required|string',
                'receipt_number' => 'nullable|string',
                'receipt_attachment' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
                'notes' => 'nullable|string',
                'tax_amount' => 'nullable|numeric',
            ]);



            $filePath = "";
            if ($request->has('receipt_attachment')) {
                $filePath = uploadAttachment('receipt_attachment', $request->expenses_name, $request->file('receipt_attachment'));
            }

            // Add the file path to the validated data
            $validatedData['receipt_attachment'] = $filePath;

            // Create a new expense record
            Expense::create([
                'expenses_name' => $request->expenses_name,
                'description' => $request->description,
                'amount' => $request->amount,
                'supplier_name' => $request->supplier_name,
                'buyer_name' => $request->buyer_name,
                'expense_date' => $request->expense_date,
                'payment_method' => $request->payment_method,
                'receipt_number' => $request->receipt_number,
                'receipt_attachment' => $filePath,
                'notes' => $request->notes,
                'user_id' => '1',
                'tax_amount' => $request->tax_amount,
                'category_id' => $request->category_id
            ]);

            // Redirect to the expenses list page with a success message
            return redirect()->route('expenses.index')->with('success', 'Expense created successfully');
        } catch (\Exception $e) {
            return $e;
            // Handle any exceptions that occurred during the file upload or database operation
            return redirect()->route('expenses.index')->with('error', 'An error occurred while creating the expense: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $expense = Expense::find($id);
        $categories = ExpensesCategory::get();
        return view('expenses.edit', compact('expense', 'categories'));
    }

    public function update(Request $request, $id)
    {
        try {
            // Validate the request data
            $validatedData = $request->validate([
                'expenses_name' => 'required|string',
                'description' => 'required|string',
                'amount' => 'required|numeric',
                'supplier_name' => 'required|string',
                'buyer_name' => 'required|string',
                'expense_date' => 'required|date',
                'payment_method' => 'required|string',
                'receipt_number' => 'nullable|string',
                'receipt_attachment' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
                'notes' => 'nullable|string',
                'tax_amount' => 'nullable|numeric',
                'category_id' => 'required|integer',
            ]);

            // Find the expense record by its ID
            $expense = Expense::findOrFail($id);

            // If a new receipt attachment file is uploaded, update it
            if ($request->hasFile('receipt_attachment')) {
                // Upload the new file and update the file path
                $filePath = uploadAttachment('receipt_attachment', $request->expenses_name, $request->file('receipt_attachment'));

                // Update the expense record with the new file path
                $expense->update(['receipt_attachment' => $filePath]);
            }

            // Update the expense record with the rest of the validated data
            $expense->update([
                'expenses_name' => $request->expenses_name,
                'description' => $request->description,
                'amount' => $request->amount,
                'supplier_name' => $request->supplier_name,
                'buyer_name' => $request->buyer_name,
                'expense_date' => $request->expense_date,
                'payment_method' => $request->payment_method,
                'receipt_number' => $request->receipt_number,
                'notes' => $request->notes,
                'tax_amount' => $request->tax_amount,
                'category_id' => $request->category_id,
            ]);

            // Redirect to the expenses list page with a success message
            return redirect()->route('expenses.index')->with('success', 'Expense updated successfully');
        } catch (\Exception $e) {
            // Handle any exceptions that occurred during the file upload or database operation
            return redirect()->route('expenses.index')->with('error', 'An error occurred while updating the expense: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {

        try {
            // Find the expense record by its ID
            $expense = Expense::findOrFail($id);



            // Delete the associated directory using invoice_number
            if (!empty($expense->receipt_attachment)) {
                Storage::disk('receipt_attachment')->deleteDirectory($expense->expenses_name);
            }

            // Delete the expense record
            $expense->delete();

            // Redirect to the expenses list page with a success message
            return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully');
        } catch (\Exception $e) {
            // Handle any exceptions that occurred during the file deletion or database operation
            return redirect()->route('expenses.index')->with('error', 'An error occurred while deleting the expense: ' . $e->getMessage());
        }
    }


}


<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Expense;

class ExpenseManager extends Component
{
    public $expenses;
    public $totalExpenses = 0;
    public $title, $amount, $date, $is_recurring = false, $expense_id;
    public $isEditing = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'amount' => 'required|numeric|min:0',
        'date' => 'required|date',
        'is_recurring' => 'boolean',
    ];

    public function render()
    {
        $this->expenses = Expense::latest()->get();
        $this->totalExpenses = $this->expenses->sum('amount');
        return view('livewire.expense-manager')->layout('layouts.app');
    }

    public function resetForm()
    {
        $this->title = $this->amount = $this->date = null;
        $this->is_recurring = false;
        $this->expense_id = null;
        $this->isEditing = false;
    }

    public function save()
    {
        $this->validate();

        Expense::create([
            'title' => $this->title,
            'amount' => $this->amount,
            'date' => $this->date,
            'is_recurring' => $this->is_recurring,
        ]);

        session()->flash('message', 'Expense added.');
        $this->resetForm();
    }

    public function edit($id)
    {
        $expense = Expense::findOrFail($id);
        $this->expense_id = $id;
        $this->title = $expense->title;
        $this->amount = $expense->amount;
        $this->date = $expense->date->format('Y-m-d');
        $this->is_recurring = $expense->is_recurring;
        $this->isEditing = true;
    }

    public function update()
    {
        $this->validate();

        Expense::findOrFail($this->expense_id)->update([
            'title' => $this->title,
            'amount' => $this->amount,
            'date' => $this->date,
            'is_recurring' => $this->is_recurring,
        ]);

        session()->flash('message', 'Expense updated.');
        $this->resetForm();
    }

    public function delete($id)
    {
        Expense::findOrFail($id)->delete();
        session()->flash('message', 'Expense deleted.');
    }
}

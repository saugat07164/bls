<div class="py-12 px-12">
  <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">
    <div class="max-w-full mx-auto mt-8 p-8 bg-white rounded-xl shadow-lg space-y-6">

      @if (session()->has('message'))
        <div class="p-3 rounded text-green-800 bg-green-100 border border-green-300">
          {{ session('message') }}
        </div>
      @endif

      <form wire:submit.prevent="{{ $isEditing ? 'update' : 'save' }}" class="space-y-6">
        <h2 class="text-3xl font-bold text-[#1A2B4C]">
          {{ $isEditing ? 'Edit Expense' : 'Add New Expense' }}
        </h2>

        <div>
          <label class="block mb-2 font-semibold text-[#1A2B4C]">Title</label>
          <input
            type="text"
            wire:model="title"
            placeholder="Enter expense title"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#6699CC] focus:border-transparent transition"
          />
          @error('title') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
          <label class="block mb-2 font-semibold text-[#1A2B4C]">Amount (Rs)</label>
          <input
            type="number"
            wire:model="amount"
            step="0.01"
            placeholder="0.00"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#6699CC] focus:border-transparent transition"
          />
          @error('amount') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div>
          <label class="block mb-2 font-semibold text-[#1A2B4C]">Date</label>
          <input
            type="date"
            wire:model="date"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#6699CC] focus:border-transparent transition"
          />
          @error('date') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center space-x-3">
          <input
            type="checkbox"
            wire:model="is_recurring"
            id="recurring"
            class="h-5 w-5 rounded border-gray-300 text-[#6699CC] focus:ring-[#6699CC]"
          />
          <label for="recurring" class="font-semibold text-[#1A2B4C] cursor-pointer">Recurring Expense?</label>
        </div>

        <div class="flex items-center space-x-4">
          <button
            type="submit"
            class="bg-[#1A2B4C] hover:bg-[#15335a] text-white font-semibold px-6 py-2 rounded-lg shadow-md transition"
          >
            {{ $isEditing ? 'Update' : 'Save' }}
          </button>
          @if ($isEditing)
            <button
              type="button"
              wire:click="resetForm"
              class="text-[#1A2B4C] hover:underline font-semibold"
            >
              Cancel
            </button>
          @endif
        </div>
      </form>

      <hr class="my-6 border-gray-300" />

      <h3 class="text-2xl font-bold text-[#1A2B4C] mb-4">Expense Records</h3>

      <div class="overflow-x-auto rounded-lg shadow">
        <table class="min-w-full bg-white">
          <thead style="background-color: #6699CC;" class="text-white uppercase text-sm font-semibold">
            <tr>
              <th class="px-6 py-3 text-left">Title</th>
              <th class="px-6 py-3 text-left">Amount</th>
              <th class="px-6 py-3 text-left">Date</th>
              <th class="px-6 py-3 text-left">Recurring</th>
              <th class="px-6 py-3 text-left">Actions</th>
            </tr>
          </thead>
          <tbody>
  @foreach ($expenses as $exp)
    <tr class="border-b last:border-none hover:bg-gray-50 transition">
      <td class="px-6 py-4 text-[#1A2B4C] font-medium">{{ $exp->title }}</td>
      <td class="px-6 py-4 text-[#1A2B4C]">Rs. {{ number_format($exp->amount, 2) }}</td>
      <td class="px-6 py-4 text-[#1A2B4C]">{{ $exp->date->format('Y-m-d') }}</td>
      <td class="px-6 py-4">
        @if($exp->is_recurring)
          <span class="text-[#FFD700] font-semibold">Yes</span>
        @else
          <span class="text-gray-400">No</span>
        @endif
      </td>
      <td class="px-6 py-4 space-x-4">
      <!-- Polished Shiny Blue Edit Button -->
<button
    wire:click="edit({{ $exp->id }})"
    class="px-5 py-2 font-semibold rounded-lg
           bg-gradient-to-r from-blue-600 via-blue-500 to-blue-700
           text-white
           shadow-[0_4px_15px_rgba(59,130,246,0.5)]
           ring-1 ring-blue-400
           hover:from-blue-700 hover:via-blue-600 hover:to-blue-800
           transition
           relative
           overflow-hidden
           before:absolute before:inset-0 before:bg-white before:opacity-10 before:rounded-lg before:pointer-events-none
           before:transition-opacity before:duration-500
           hover:before:opacity-30
           focus:outline-none focus:ring-2 focus:ring-blue-300 focus:ring-offset-2"
>
    Edit
</button>

<!-- Polished Shiny Red Delete Button -->
<button
    wire:click="delete({{ $exp->id }})"
    class="px-5 py-2 font-semibold rounded-lg
           bg-gradient-to-r from-red-600 via-red-500 to-red-700
           text-white
           shadow-[0_4px_15px_rgba(239,68,68,0.5)]
           ring-1 ring-red-400
           hover:from-red-700 hover:via-red-600 hover:to-red-800
           transition
           relative
           overflow-hidden
           before:absolute before:inset-0 before:bg-white before:opacity-10 before:rounded-lg before:pointer-events-none
           before:transition-opacity before:duration-500
           hover:before:opacity-30
           focus:outline-none focus:ring-2 focus:ring-red-300 focus:ring-offset-2"
>
    Delete
</button>

      </td>
    </tr>
  @endforeach

  <!-- Total row -->
  <tr class="bg-gray-100 font-semibold text-[#1A2B4C]">
    <td colspan="1" class="px-6 py-4 text-left">Total Expenses</td>
    <td colspan="4" class="px-6 py-4 ">Rs. {{ number_format($totalExpenses, 2) }}</td>
  </tr>
</tbody>

        </table>
      </div>

    </div>
  </div>
</div>

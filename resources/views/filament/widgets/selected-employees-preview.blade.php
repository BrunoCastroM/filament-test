@if($employees->isNotEmpty())
<div class="overflow-x-auto border rounded-lg">
  <table class="w-full rounded-lg shadow-md overflow-hidden">
    <thead class="border-b">
      <tr>
        <th class="px-4 py-3 text-left">Full Name</th>
        <th class="px-4 py-3 text-left">Country</th>
        <th class="px-4 py-3 text-left">Address</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
      @foreach($employees as $employee)
      <tr>
        <td class="px-4 py-3 text-left">{{ $employee->full_name }}</td>
        <td class="px-4 py-3 text-left">{{ optional($employee->country)->name }}</td>
        <td class="px-4 py-3 text-left">{{ $employee->address }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@else
<p class="text-gray-500">No employees selected.</p>
@endif
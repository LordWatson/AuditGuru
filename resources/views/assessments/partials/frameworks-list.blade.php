<div class="w-full px-6 py-4 border-b">
    <h3 class="font-semibold text-lg text-gray-800">Available Frameworks</h3>
</div>
<div class="w-full p-4">
    <table class="w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr class="bg-gray-50 text-left">
            <th scope="col" class="px-4 py-2 text-sm text-gray-500 font-medium">
                Framework Name
            </th>
            <th scope="col" class="px-4 py-2 text-sm text-gray-500 font-medium">
                Controls
            </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($frameworks as $framework)
            <tr class="hover:bg-gray-100">
                <td class="px-4 py-2 text-sm text-gray-900">
                    <a href="{{ route('assessments.show', ['assessment' => $framework->id]) }}">{{ $framework->name }}</a>
                </td>
                <td class="px-4 py-2 text-sm text-gray-900">{{ count($framework->controls) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="bg-white dark:bg-[#313131] overflow-hidden shadow-sm sm:rounded-lg">
    <div class="px-6 py-4 border-b border-gray-200 dark:border-[#1a1a1a]">
        <h3 class="font-semibold text-lg dark:text-gray-200 text-gray-800">Quick Actions</h3>
    </div>
    <div class="p-6 grid grid-cols-4 gap-4">
        @if(Auth::user()->hasPermission('view', 'assessments'))
            <a href="{{ route('assessments.create') }}"
               class="quick-action-btn col-span-2 row-span-2"
            >
                Start Assessment
            </a>
        @endif
        @if(Auth::user()->hasPermission('view', 'policy generator'))
            <a href="{{ route('policy-generator.index') }}"
               class="quick-action-btn col-span-2 row-span-2"
            >
                Generate Policy
            </a>
        @endif
        @if(Auth::user()->hasPermission('view', 'audit reports'))
            <a href="{{ route('audit-reports.index') }}"
               class="quick-action-btn col-span-2 row-span-2"
            >
                Check Reports
            </a>
        @endif
        @if(Auth::user()->hasPermission('view', 'documents'))
            <a href="{{ route('documents.index') }}"
               class="quick-action-btn col-span-2 row-span-2"
            >
                View Evidence
            </a>
        @endif
    </div>
</div>



<x-layout>
    <x-bread-crumbs :links="['jobs' => route('jobs.index')]" class="mb-4" />

    <x-card class="mb-4 text-sm">Filters
        <form action="{{ route('jobs.index') }}" method="GET">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">
                        Search
                    </div>
                    <x-text-input name="search" value="{{ request('search') }}" placeholder="Search For a Job" />
                </div>
                <div>
                    <div class="mb-1 font-semibold">
                        Salary
                    </div>
                    <div class="flex space-x-2">
                        <x-text-input name="min_salary" value="{{ request('min_salary') }}" placeholder="From" />
                        <x-text-input name="max_salary" value="{{ request('min_salary')}}" placeholder="To" />
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">
                        Experience
                    </div>
                      <x-radio-group name="experience"
                      :options="\App\Models\Job::$experience" />
                </div>
                <div>
                  <div class="mb-1 font-semibold">
                    Category
                </div>
                  <x-radio-group name="category"
                  :options="\App\Models\Job::$category" />
                </div>
            </div>



            <button class="w-full rounded-lg py-3 font-bold border ">Filter</button>
        </form>
    </x-card>

    @foreach ($jobs as $job)
        <x-job-card :job="$job" class="mb-4">

            <x-link-button :href="route('jobs.show', $job)">
                Show Details
            </x-link-button>

        </x-job-card>
    @endforeach

</x-layout>

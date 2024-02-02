<x-layout>
    <x-bread-crumbs class="mb-4" :links="['jobs' => route('jobs.index'),
     $job->title => route('jobs.show' , $job) , 'Apply' => '#' ]"/>

    <x-job-card :$job/>
    <x-card>
        <h2 class="mb-4 text-lg font-medium">Your job application</h2>
        <form action="{{route('job.application.store' , $job->id)}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="expected_salary"
                       class="mb-2 block text-sm font-medium text-slate-900">Expected Salary</label>
                <x-text-input type="number" name="expected_salary"/>
            </div>
        <button class="w-full  border border-slate-300 rounded-md py-1.5 px-2.5 font-medium hover:bg-slate-300">APPLY</button>
        </form>
    </x-card>
</x-layout>

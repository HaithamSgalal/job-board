<x-layout>

    <x-bread-crumbs class="mb-4" :links="['My-Job-Application' => '#']" />

        @forelse ($applications as $application)
            <x-job-card :job="$application->job">
                    <div class="flex items-center justify-between text-sm text-slate-500" >
                        <div>
                            <div>
                                Applied {{ $application->created_at->diffForHumans() }}
                            </div>
                            <div>
                                total {{ Str::plural('Applicant' , $application->job->job_applications_count )}}
                                {{ $application->job->job_applications_count }}
                            </div>
                            <div>
                                Your asking salary ${{ number_format($application->expected_salary) }}
                            </div>
                            <div>
                                Ave asking salary $ {{ number_format($application->job->job_applications_avg_expected_salary) }}
                            </div>
                        </div>
                        <div>
                            <form action="{{route('my-job-applications.destroy' , $application)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="text-md font-bold border border-slate-200 py-1 px-2 rounded-md ">
                                    Cancel
                                </button>
                            </form>
                        </div>
                    </div>
            </x-job-card>
        @empty
        <div class="rounded-md border border-dashed border-slate-300 p-8">
            <div class="text-center font-medium">
                No job application yet
            </div>
            <div class="text-center">
                Go find some jobs <a class="text-indigo-500 hover:underline"
                                     href="{{ route('jobs.index') }}">here!</a>
            </div>
        </div>
        @endforelse

</x-layout>

<x-layout>
    <x-bread-crumbs :links="['my-jobs' => route('my-jobs.index'), 'create' => '#']" class="mb-4" />

    <x-card class="mb-8">
        <form action="{{ route('my-jobs.update' , $job) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <label for="title" required>Job Title</label>
                    <x-text-input name='title' :value="$job->title" />
                </div>

                <div>
                    <label for="location" required>Location</label>
                    <x-text-input name='location'  :value="$job->location"/>
                </div>

                <div class="col-span-2">
                    <label for="salary" required>Salary</label>
                    <x-text-input type='number' name='salary' :value="$job->salary" />
                </div>

                <div class="col-span-2">
                    <label for="description" required>Description</label>
                    <x-text-input name='description' type='textarea' :value="$job->description" />
                </div>

                <div>
                    <label for="experience">Experience</label>
                    <x-radio-group name="experience" :options="\App\Models\Job::$experience" :value="$job->experience" />
                </div>

                <div>
                    <label for="category">Category</label>
                    <x-radio-group name="category" :options="\App\Models\Job::$category" :all-Option="false" :value="$job->category" />
                </div>


            </div>


            <button class="w-full font-bold border py-2 rounded-md">Edit Job</button>
            </div>



        </form>

    </x-card>
</x-layout>

<x-layout>
    <x-card>
        <form action="{{route('employer.store')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="mb-4" for="company_name"  required >Company Name</label>
                <x-text-input name="company_name"/>
            </div>

            <button class="w-full">Create</button>
        </form>
    </x-card>
</x-layout>

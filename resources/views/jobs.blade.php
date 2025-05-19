<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>

    @foreach($jobs as $job)
        <li> {{ $job['title'] . ": Pays " . $job['salary'] }} A Year </li>
    @endforeach

</x-layout>

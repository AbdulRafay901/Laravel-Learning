<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->

    <h1>Fetch Data</h1>
    @foreach ($users as $item)
        <p>{{ $item->Name }}</p>
        <p>{{ $item->Email }}</p>
    @endforeach
</div>

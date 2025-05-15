<form action="{{ url('/update') }}" method="POST">
    @csrf
    @method('PUT')
    <!-- form fields -->
    <button type="submit">Update</button>
</form>

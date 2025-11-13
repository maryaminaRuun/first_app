<x-layout>
    <h1>Create New Reza Creative Item</h1>
    <form action="/rezacreative" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <button type="submit" class="btn">Create</button>
    </form>
</x-layout>
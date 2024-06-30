<x-layout>
    <div class="note-container">
        <a href="#" class="new-note-btn">New Note</a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    {{ $note->note }}
                    <div class="note-buttons">
                        <a href="{{ route('note.show', $note) }}" class="note-edit-button">View</a>
                        <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="note-edit-button">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
<form action="{{ route('books.store') }}" method="POST">
    
    <h2><a href="{{ route('books.index') }}">Lihat Data Buku</a></h2>
    @csrf
    <br>
    <link rel = "stylesheet" href="{{asset ('css/create.css') }}">

    <div>
        Judul buku:
        <input type="text" name="title" value="{{ old('title') }}" />

        <br>

        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Penulis:
        <input type="text" name="author" value="{{ old('author') }}" />
        <br>
        @error('author')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Deskripsi:
        <textarea name="description">{{ old('description') }}</textarea>
        <br>
        @error('description')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <input type="submit" value="Simpan">
    </div>
    <br>
</form>


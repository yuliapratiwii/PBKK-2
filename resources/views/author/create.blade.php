<form action="{{ route('author.store') }}" method="POST">
    
    <h2><a href="{{ route('author.index') }}">Lihat Data penulis</a></h2>
    @csrf
    <br>
    <link rel = "stylesheet" href="{{asset ('css/create.css') }}">

    <div>
        Nama Penulis:
        <input type="text" name="name" value="{{ old('name') }}" />
        <br>
        @error('name')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Email:
        <input type="text" name="email" value="{{ old('email') }}" />
        <br>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        Alamat:
        <textarea name="address">{{ old('address') }}</textarea>
        <br>
        @error('address')
            <p>{{ $message }}</p>
        @enderror
    </div>
    <div>
        <input type="submit" value="Simpan">
    </div>
    <br>
</form>


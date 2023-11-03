
<h4>DATA BUKU</h4>
<br>

Judul: {{ $book->title }}
<br>
Penulis: {{ $book->author->name ?? 'no author' }}
<br>
Deskripsi: {{ $book->description }}
<x-admin-layout active="training" title="Tambah Pelatihan">
    <div class="card">
        <div class="card-header">
            Tambah Pelatihan
        </div>
        <div class="card-body">
            <form action="{{ route('admin.pelatihan.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group my-4">
                    <label for="title" class="form-label">Nama</label>
                    <input type="text" name="title" id="title"
                        class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"
                        placeholder="Ex: Pelatihan Menjahit Baju Jas Proffesional">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-4">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" id="description" rows="6"
                        class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group my-4">
                    <label for="image" class="form-label">Thumbnail</label>
                    <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror"
                        id="thumbnail" value="{{ old('thumbnail') }}">
                </div>
                <div class="form-group my-4">
                    <label for="trailer_url" class="form-label">Trailer Url</label>
                    <input type="text" name="trailer_url" id="trailer_url"
                        class="form-control @error('trailer_url') is-invalid @enderror" value="{{ old('trailer_url') }}"
                        placeholder="Ex: https://youtu.be/eFsopeoAIHs">

                    @error('trailer_url')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-4">
                    <label for="youtube_url" class="form-label">Youtube Url</label>
                    <input type="text" name="youtube_url" id="youtube_url"
                        class="form-control @error('youtube_url') is-invalid @enderror" value="{{ old('youtube_url') }}"
                        placeholder="Ex: https://youtu.be/eFsopeoAIHs">
                    <div class="form-text">*Jika sistem pelatihan mu offline maka kosongkan saja</div>
                    @error('youtube_url')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-4">
                    <label for="map_location" class="form-label">Iframe Map</label>
                    <input type="text" name="map_location" id="map_location"
                        class="form-control @error('map_location') is-invalid @enderror"
                        value="{{ old('map_location') }}"
                        placeholder="Ex: https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.273167159548!2d109.24727261448685!3d-7.434995575313159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e9d1768e4d1%3A0x959269c10818fa0c!2sSMK%20Telkom%20Purwokerto!5e0!3m2!1sid!2sid!4v1672970066423!5m2!1sid!2sid">
                    <div class="form-text">*Jika sistem pelatihan mu online maka kosongkan saja</div>
                    @error('map_location')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-4">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea name="address" id="address" rows="6" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                    <div class="form-text">*Jika sistem pelatihan mu online maka kosongkan saja</div>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-4">
                    <label for="destination" class="form-label">Kategori</label>
                    <select name="category_id" class="form-select @error('category_id') is-invalid @enderror"
                        id="category_id">
                        <option value="">Pilih Kategori</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-4">
                    <label for="destination" class="form-label">Mentor</label>
                    <select name="mentor_id" class="form-select @error('mentor_id') is-invalid @enderror"
                        id="mentor_id">
                        <option value="">Pilih Mentor</option>
                        @foreach ($mentors as $mentor)
                            <option value="{{ $mentor->id }}">{{ $mentor->full_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group my-4">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" name="price" id="price"
                        class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"
                        placeholder="Ex: 150000">

                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-4">
                    <label for="destination" class="form-label">Sistem Pembelajaran</label>
                    <select name="system" class="form-select @error('system') is-invalid @enderror" id="system">
                        <option value="">Pilih Sistem Pembelajaran</option>
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                    </select>
                </div>
                <div class="form-group my-4">
                    <label for="destination" class="form-label">Level</label>
                    <select name="level" class="form-select @error('level') is-invalid @enderror" id="level">
                        <option value="">Pilih Tingkatan Pembelajaran</option>
                        <option value="Pemula">Pemula</option>
                        <option value="Menengah">Menengah</option>
                        <option value="Profesional">Profesional</option>
                    </select>
                </div>
                <div class="form-group my-4">
                    <label for="meeting" class="form-label">Pertemuan</label>
                    <input type="number" name="meeting" id="meeting"
                        class="form-control @error('meeting') is-invalid @enderror" value="{{ old('meeting') }}"
                        placeholder="Berapa Kali Pertemuan? Ex: 12">

                    @error('meeting')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-4">
                    <label for="per_week" class="form-label">Perminggu</label>
                    <input type="number" name="per_week" id="per_week"
                        class="form-control @error('per_week') is-invalid @enderror" value="{{ old('per_week') }}"
                        placeholder="Berapa Kali Perminggu? Ex: 3">

                    @error('per_week')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-4">
                    <label for="training_info" class="form-label">Info Pelatihan</label>
                    <input type="text" name="training_info" id="training_info"
                        class="form-control @error('training_info') is-invalid @enderror"
                        value="{{ old('training_info') }}"
                        placeholder="Ex: Pelatihan dilakukan secara offline, Setiap pertemuan berlangsung 2 jam.">

                    @error('training_info')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary me-1 mb-1 float-end">Tambah Pelatihan</button>
            </form>

        </div>
    </div>


    @push('addonScript')
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

        <script>
            var konten = document.getElementById("description");
            CKEDITOR.replace(konten, {
                language: 'en-gb'
            });
            CKEDITOR.config.allowedContent = true;
        </script>
    @endpush
</x-admin-layout>

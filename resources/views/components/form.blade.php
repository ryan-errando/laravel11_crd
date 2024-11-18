<div class="container">
    <form method="POST" action="{{route('mahasiswa.add')}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                id="name" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" 
                id="nim" name="nim" value="{{ old('nim') }}">
            @error('nim')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" 
                        type="radio" name="jenis_kelamin" id="laki-laki" value="L"
                        {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }}>
                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" 
                        type="radio" name="jenis_kelamin" id="perempuan" value="P"
                        {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }}>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
                @error('jenis_kelamin')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
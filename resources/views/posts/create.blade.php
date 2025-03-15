<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <div class="card shadow-lg border-0 rounded-4" style="background: #e9f5e9;">
        <div class="card-body p-4">
          <h3 class="text-center text-success fw-bold">Add a Post</h3>

          {{-- Display Validation Errors --}}
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label text-success fw-semibold">Title</label>
              <input type="text" class="form-control border-success @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
              @error('title')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="body" class="form-label text-success fw-semibold">Body</label>
              <textarea class="form-control border-success @error('body') is-invalid @enderror" id="body" name="body" rows="4" required>{{ old('body') }}</textarea>
              @error('body')
                <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-success btn-lg rounded-pill shadow">Create Post</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
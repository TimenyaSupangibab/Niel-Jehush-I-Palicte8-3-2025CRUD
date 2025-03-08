<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <div class="card shadow-lg border-0 rounded-4" style="background: #e9f5e9;">
        <div class="card-body p-4">
          <h3 class="text-center text-success fw-bold">Add a Post</h3>
          <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label text-success fw-semibold">Title</label>
              <input type="text" class="form-control border-success" id="title" name="title" required>
            </div>
            <div class="mb-3">
              <label for="body" class="form-label text-success fw-semibold">Body</label>
              <textarea class="form-control border-success" id="body" name="body" rows="4" required></textarea>
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

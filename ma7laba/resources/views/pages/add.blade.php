


<!-- add les plats -->
<div class="modal fade" id="ADD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Title</label>
              <input type="text" class="form-control" id="Title" name="Title">
        
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">image</label>
              <input type="file" class="form-control" id="imagePlat" name="imagePlat">
         
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Description</label>
              <textarea class="form-control" id="description" name="description"></textarea>
     
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button  class="btn btn-primary" type="submit">share</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
  <!-- edit les plats -->
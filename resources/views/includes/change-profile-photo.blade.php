{{-- Blade imports --}}

{{-- Change profile modal --}}

<div class="modal fade form-modal" id="profile_photo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper" data-dismiss="modal"><ion-icon name="close-outline"></ion-icon></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
            <div class="modal-body">

                <form enctype="multipart/form-data" method="POST" action="{{ url('change-photo') }}">
                    @csrf
                    <input type="file" onchange="readURL(this);" placeholder="Choose a new picture" id="image" name="image" class="form-group">
                    @error('image')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    <button type="submit"  id="submit-photo" name="submit-photo" class="btn btn-primary pull-right">UPDATE</button>
                </form>

            </div>
        </div>
    </div>
</div>


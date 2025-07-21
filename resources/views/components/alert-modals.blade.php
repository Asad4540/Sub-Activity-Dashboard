<div class="modal modal-alert modal-success" tabindex="-1" id="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        <div class="d-flex flex-column align-items-center justify-content-center mx-auto">
            <i class="bi bi-check-circle"></i>
            <div><h3>Success!</h3></div>
        </div>
      </div>
      <div class="modal-body">
        <p class="modal-body-desc">All changes are now live. You can continue using the tool or revisit your profile anytime to make further updates.</p>
        <div class="d-flex justify-content-center gap-3">
            <a type="button" class="btn btn-primary btn-route" href="#"><span>View Users</span></a>
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back to Dashboard</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal modal-alert modal-failed" tabindex="-1" id="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        <div class="d-flex flex-column align-items-center justify-content-center mx-auto">
            <i class="bi bi-exclamation-circle"></i>
            <div><h3>Failed!</h3></div>
        </div>
      </div>
      <div class="modal-body">
        <p class="modal-body-desc">All changes have failed. You can continue using the tool or revisit your profile anytime to make further updates.</p>
        <div class="d-flex justify-content-center gap-3">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span>Try Again</span></button>
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Back to Dashboard</button>
        </div>
      </div>
    </div>
  </div>
</div>
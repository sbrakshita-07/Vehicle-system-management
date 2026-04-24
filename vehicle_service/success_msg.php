<style>
    #uni_modal .modal-footer,
    #uni_modal .modal-header {
        display: none;
    }
</style>

<div class="container-fluid">
    <p>Your Request was submitted successfully. The management will contact you as soon as they see your request. Thank you!</p>
    
    <div class="form-group">
        <label for="total_cost" class="control-label">Approximate Bill</label>
        <input type="text" id="total_cost" class="form-control form-control-sm rounded-0" value="<?php echo isset($total_cost) ? $total_cost : "" ?>" readonly>
    </div>

    <div class="w-100 d-flex justify-content-end mx-2">
        <div class="col-auto">
            <button class="btn btn-dark btn-sm rounded-0" type="button" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>

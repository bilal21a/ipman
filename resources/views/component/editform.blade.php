{{-- <form method="post" enctype="multipart/form-data" id="update_form">
    @csrf --}}
    <input type="hidden" name="id" value="{{ $address->id }}">
    <div class="modal-body">
        <div class="mb-10">
            <label class="form-label">IP Address</label>
            <input type="text" class="form-control" name="ip_address" placeholder="192.168.100.100" required
                value="{{ $address->ip_address }}">
        </div>
        <div class="mb-10">
            <label class="form-label">Description</label>
            <textarea class="form-control" id="form-label" name="description" rows="3" placeholder="description" required>{{ $address->description }}</textarea>
        </div>
        <div class="mb-10">
            <label class="form-label">Location</label>
            <input type="text" class="form-control" name="location" placeholder="location" required
                value="{{ $address->location }}">
        </div>
        <div class="mb-10">
            <label class="form-label">Previous</label>
            <input type="text" class="form-control" name="previous" placeholder="Previous" required
                value="{{ $address->previous }}">
        </div>
        <div class="mb-10">
            <label class="form-label">Type</label>
            <select class="form-control" name="type" id="form-label" required>
                <option value="server" @if ($address->type == 'server') selected @endif>Server</option>
                <option value="open IP" @if ($address->type == 'open IP') selected @endif>Open IP</option>
                <option value="Switch/Router" @if ($address->type == 'Switch/Router') selected @endif>Switch/Router</option>
                <option value="Printers" @if ($address->type == 'Printers') selected @endif>Printers</option>
                <option value="DHCP" @if ($address->type == 'DHCP') selected @endif>DHCP</option>
                <option value="Special Devices" @if ($address->type == 'Special Devices') selected @endif>Special Devices
                </option>
                <option value="PCs" @if ($address->type == 'PCs') selected @endif>PCs</option>
            </select>

        </div>
    </div>
    {{-- <div class="modal-footer">
        <button class="btn btn-primary btn-save">
            <span class="btn-text">Save Changes</span>
            <span class="spinner-border spinner-border-sm align-middle ms-2 btnLoader"></span>
        </button>
    </div>
</form> --}}

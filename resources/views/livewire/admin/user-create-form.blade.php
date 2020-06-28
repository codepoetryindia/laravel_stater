
<form wire:submit.prevent="submit">   
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">{{__('form.name')}}</label>
                <input type="text" class="form-control form-control-sm" id="name" placeholder="Enter name" wire:model="name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="mobile">{{__('form.mobile')}}</label>
                <input type="text" class="form-control form-control-sm" id="mobile" placeholder="Enter mobile" wire:model="mobile">
                @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="email">{{__('form.email')}}</label>
                <input type="text" class="form-control form-control-sm" id="email" placeholder="Enter email" wire:model="email">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-sm">{{__('form.submit_button')}}</button>
        </div>
    </div>
</form>
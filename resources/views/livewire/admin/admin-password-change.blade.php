
<form wire:submit.prevent="submit">   
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="password">{{__('form.password')}}</label>
                <input type="password" class="form-control form-control-sm" id="password" placeholder="Enter password" wire:model="password">
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="confirm_password">{{__('form.confirm_password')}}</label>
                <input type="password" class="form-control form-control-sm" id="confirm_password" placeholder="Enter confirm password" wire:model="confirm_password">
                @error('confirm_password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-sm">{{__('form.submit_button')}}</button>
        </div>
    </div>
</form>
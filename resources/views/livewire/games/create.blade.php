<div>
    <div class="card border border-light">
        <div class="card-header bg-info">
            <h3 class="mt-2">Add Games</h3>
        </div>
        <div class="card-body shadow">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="game_name">
                <label for="game_name">Game Name</label>
                @error('game_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="game_type">
                <label for="game_type">Game Type</label>
                @error('game_type')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="size">
                <label for="size">Size</label>
                @error('size')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
</div>
                <div class="form-floating mb-3">
                    <select name="series" class="form-select" wire:model.defer="series">
                        <option hidden="true">Select Series</option>
                        <option selected disabled>Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                    <label for="series">Series</label>
                    @error('series')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            <div class="form-group mb-2 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" wire:click="addGame()">
                    Add Game
                </button>
            </div>
        </div>
    </div>
</div>

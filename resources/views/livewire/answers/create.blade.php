<div class="card">
    <form class="p-5" wire:submit.prevent="submit">
        <div class="mb-3">
            <label for="name" class="form-label">Your Name (optional)</label>
            <input type="name" class="form-control" wire:model="name" id="name" aria-describedby="name">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Your Message to {{ $user->name }}</label>
            <textarea type="message" class="form-control" wire:model="message" id="name" aria-describedby="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Create</button>
    </form>

</div>

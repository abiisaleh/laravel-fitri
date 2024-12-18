<x-filament-panels::page>
    <div>
        <form wire:submit="create">
            {{ $this->form }}
        </form>

        <x-filament-actions::modals />
    </div>

    <div>
        {{ $this->saveAction }}
    </div>

</x-filament-panels::page>

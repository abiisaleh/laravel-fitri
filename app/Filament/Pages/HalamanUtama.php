<?php

namespace App\Filament\Pages;

use App\Models\site;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class HalamanUtama extends Page implements HasForms, HasActions
{
    use InteractsWithForms;
    use InteractsWithActions;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    protected static string $view = 'filament.pages.halaman-utama';

    public ?array $data = [];

    public function mount(): void
    {
        $data = site::all()->pluck('content', 'title')->toArray();
        // dd($data);
        $this->form->fill($data);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Profil')
                    ->statePath('profil')
                    ->collapsible()
                    ->schema([
                        TextInput::make('visi')
                            ->required(),
                        Repeater::make('misi')
                            ->schema([
                                TextInput::make('isi')->hiddenLabel(),
                            ])
                    ]),

                Section::make('Fasilitas')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        Repeater::make('fasilitas')
                            ->hiddenLabel()
                            ->schema([
                                TextInput::make('judul'),
                                Textarea::make('deskripsi'),
                            ])
                    ]),

                Section::make('Layanan')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        Repeater::make('layanan')
                            ->hiddenLabel()
                            ->schema([
                                TextInput::make('judul'),
                                Textarea::make('deskripsi'),
                            ])
                    ]),

                Section::make('Team')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        Repeater::make('team')
                            ->hiddenLabel()
                            ->schema([
                                Split::make([
                                    Grid::make(1)
                                        ->schema([
                                            TextInput::make('nama'),
                                            TextInput::make('jabatan'),
                                        ]),
                                    FileUpload::make('foto')
                                        ->avatar(),
                                ]),

                                Fieldset::make('Social')
                                    ->columns(3)
                                    ->schema([
                                        TextInput::make('facebook'),
                                        TextInput::make('instagram'),
                                        TextInput::make('twitter'),
                                    ])
                            ])
                    ]),

                Section::make('Kontak')
                    ->statePath('kontak')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        TextInput::make('telp'),
                        TextInput::make('email')->email(),
                        Textarea::make('alamat'),

                        Fieldset::make('Social')
                            ->columns(3)
                            ->schema([
                                TextInput::make('facebook'),
                                TextInput::make('instagram'),
                                TextInput::make('twitter'),
                            ])
                    ]),

                // ...
            ])
            ->statePath('data');
    }

    public function create(): void
    {
        foreach ($this->form->getState() as $key => $value) {
            if (!is_null($value)) {
                site::updateOrCreate(
                    ['title' => $key],
                    ['content' => $value]
                );
            }
        }
    }

    public function saveAction(): Action
    {
        return Action::make('save')
            ->label('Simpan Perubahan')
            ->action(function () {
                foreach ($this->form->getState() as $key => $value) {
                    if (!is_null($value)) {
                        site::updateOrCreate(
                            ['title' => $key],
                            ['content' => $value]
                        );
                    }
                }

                Notification::make()
                    ->title('Success')
                    ->success()
                    ->send();
            });
    }
}

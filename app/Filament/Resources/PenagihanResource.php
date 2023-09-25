<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Penagihan;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PenagihanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\PenagihanResource\RelationManagers;

class PenagihanResource extends Resource
{
    protected static ?string $model = Penagihan::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Iuran';

    public static function form(Form $form): Form
    {
        $form_nama = '';
        if (auth()->user()) {
            $form_nama = Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')->label('Nama Anggota')->default(auth()->user()->id)->disabled()->columnSpan(['sm' => 1]);
        } else {
            $form_nama = Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')->label('Nama Anggota')->columnSpan(['sm' => 1])
                ->reactive()->searchable()
                ->afterStateUpdated(
                    function (callable $set, callable $get) {
                        $myuser = User::find($get('user_id'));
                    }
                );
        }

        return $form
            ->schema([
                Card::make()
                ->schema([
                    $form_nama,
                    TextInput::make('updated_meter')->required(),
                    FileUpload::make('photo')->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->wrap()->sortable()->searchable(),
                TextColumn::make('user.address')->sortable()->searchable()->label('Alamat'),
                TextColumn::make('updated_meter'),
                ImageColumn::make('photo')->width(100)->height(100),
                TextColumn::make('created_at'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenagihans::route('/'),
            'create' => Pages\CreatePenagihan::route('/create'),
            'edit' => Pages\EditPenagihan::route('/{record}/edit'),
        ];
    }    
}

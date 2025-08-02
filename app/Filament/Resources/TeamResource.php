<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Team;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TeamResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TeamResource\RelationManagers;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
          return $form
            ->schema([
                TextInput::make('fullname')
                ->required()
                ->rules('regex:/^[a-zA-Z\s]*$/')
                ->placeholder('Enter full name')
                ->label('Full Name'),
                TextInput::make('designation')
                ->required()
                ->rules('regex:/^[a-zA-Z\s]*$/')
                ->placeholder('Enter designation'),
                Select::make('status')
                ->options([
                    'active' => 'Active',
                    'off' => 'Off',
                ]),
                FileUpload::make('photo'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
           ->columns([
                TextColumn::make('fullname'),
                TextColumn::make('designation'),
                ImageColumn::make('photo'), // Access from public disk
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}

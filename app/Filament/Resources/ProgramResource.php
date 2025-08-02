<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Program;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProgramResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProgramResource\RelationManagers;

class ProgramResource extends Resource
{
    protected static ?string $model = Program::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Select::make('program')
            ->options([
                'wash' => 'Water, Sanitation, and Hygiene (WASH)',
                'agri' => 'Agriculture, Food Security, and Livelihoods',
                'education' => 'Education and Development',
                'youth' => 'Youth and Women Empowerment',
                'health' => 'Health and Nutrition',
                'security' => 'Peace, Security and Governance',
                'humanitarian' => 'Humanitarian Emergencies Support',
                'gbv' => 'Gender-Based Violence (GBV) Advocacy',
                ])
                ->native(false),
                TextInput::make('description')
                ->label('description')
                ->Placeholder('e.g Agriculture')
                ->required()
                ->rules('regex:/^[a-zA-Z\s]*$/'),
        
                FileUpload::make('photo')
                ->label('Upload project images')
                ->acceptedFileTypes([
                    'application/pdf', // PDF
                    'application/msword', // DOC
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document', // DOCX
                    'image/png', // PNG Images
                    'image/jpeg', // JPG Images
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
               TextColumn::make('program'),
                TextColumn::make('description'),
                ImageColumn::make('photo'),
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
            'index' => Pages\ListPrograms::route('/'),
            'create' => Pages\CreateProgram::route('/create'),
            'edit' => Pages\EditProgram::route('/{record}/edit'),
        ];
    }
}

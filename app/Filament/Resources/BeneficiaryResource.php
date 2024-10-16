<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeneficiaryResource\Pages;
use App\Filament\Resources\BeneficiaryResource\RelationManagers;
use App\Models\Beneficiary;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class BeneficiaryResource extends Resource
{
    protected static ?string $model = Beneficiary::class;

    public static function form(Form $form): Form
    {
        return $form
            ->columns(3)
            ->schema([
                Forms\Components\TextInput::make('beneficiary_id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->default('Not Specified'),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255)
                    ->default('Not Specified'),
                Forms\Components\TextInput::make('phone_2')
                    ->tel()
                    ->required()
                    ->maxLength(255)
                    ->default('Not Specified'),
                Forms\Components\TextInput::make('phone_3')
                    ->tel()
                    ->required()
                    ->maxLength(255)
                    ->default('Not Specified'),
                Forms\Components\DatePicker::make('date_of_birth'),
                Forms\Components\TextInput::make('sex')
                    ->required()
                    ->maxLength(255)
                    ->default('Not Specified'),
                Forms\Components\TextInput::make('marital_status')
                    ->required()
                    ->maxLength(255)
                    ->default('Not Specified'),
                Forms\Components\TextInput::make('xul_status')
                    ->required()
                    ->maxLength(255)
                    ->default('Not Specified'),
                Forms\Components\Select::make('key_population_id')
                    ->searchable()
                    ->relationship('keyPopulation', 'name')
                    ->preload()
                    ->optionsLimit(5)
                    ->required(),
                Forms\Components\Select::make('location_id')
                    ->searchable()
                    ->relationship('location', 'id')
                    ->preload()
                    ->optionsLimit(5)
                    ->required(),
                Forms\Components\Select::make('project_id')
                    ->searchable()
                    ->relationship('project', 'name')
                    ->preload()
                    ->optionsLimit(5)
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->searchable()
                    ->relationship('createdBy','id')
                    ->preload()
                    ->required()
                    ->default(Auth::user()->name),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('beneficiary_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sex')
                    ->searchable(),
                Tables\Columns\TextColumn::make('marital_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('xul_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('keyPopulation.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('location.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('project.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('createdBy.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                    ExportBulkAction::make()
                        ->exports([
                            ExcelExport::make()
                                ->askForFilename()
                                ->askForWriterType()
                        ])
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
            'index' => Pages\ListBeneficiaries::route('/'),
            'create' => Pages\CreateBeneficiary::route('/create'),
            'view' => Pages\ViewBeneficiary::route('/{record}'),
            'edit' => Pages\EditBeneficiary::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationGroup(): ?string
    {
        return 'System Configurations';
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CaseFileResource\Pages;
use App\Filament\Resources\CaseFileResource\RelationManagers;
use App\Models\CaseFile;
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

class CaseFileResource extends Resource
{
    protected static ?string $model = CaseFile::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('beneficiary_id')
                    ->searchable()
                    ->relationship('beneficiary', 'name')
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('mode_of_communication_id')
                    ->searchable()
                    ->relationship('modeOfCommunication', 'name')
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('service_id')
                    ->relationship('service', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('service_provider_id')
                    ->relationship('serviceProvider', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->label('Created By')
                    ->required()
                    ->relationship('createdBy', 'name')
                    ->searchable()
                    ->preload()
                ->default(Auth::user()->id),
                Forms\Components\TextInput::make('call_duration')
                    ->maxLength(255),
                Forms\Components\Toggle::make('confirmed_service_uptake')
                    ->required(),
                Forms\Components\Toggle::make('confirmed_service_delivery')
                    ->required(),
                Forms\Components\DatePicker::make('date_of_birth'),
                Forms\Components\Select::make('sex')
                    ->searchable()
                    ->required()
                    ->options([
                        "Female" => "Female",
                        "Male" => "Male",
                        "Other" => "Other"
                    ]),
                Forms\Components\TextInput::make('counselor_notes')
                    ->maxLength(255),
                Forms\Components\Toggle::make('case_status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('beneficiary.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('modeOfCommunication.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('service.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('serviceProvider.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('call_duration')
                    ->searchable(),
                Tables\Columns\IconColumn::make('confirmed_service_uptake')
                    ->boolean(),
                Tables\Columns\IconColumn::make('confirmed_service_delivery')
                    ->boolean(),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sex')
                    ->searchable(),
                Tables\Columns\TextColumn::make('counselor_notes')
                    ->searchable(),
                Tables\Columns\IconColumn::make('case_status')
                    ->boolean(),
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
            'index' => Pages\ListCaseFiles::route('/'),
            'create' => Pages\CreateCaseFile::route('/create'),
            'view' => Pages\ViewCaseFile::route('/{record}'),
            'edit' => Pages\EditCaseFile::route('/{record}/edit'),
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

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganisationResource\Pages;
use App\Filament\Resources\OrganisationResource\RelationManagers;
use App\Models\Organisation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class OrganisationResource extends Resource
{
    protected static ?string $model = Organisation::class;

    public static function form(Form $form): Form
    {
        return $form
            ->columns(4)
            ->schema([
                Forms\Components\TextInput::make('organisationName')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('organisationLogoUrl')
                    ->required()
                    ->maxLength(255)
                    ->default('https://via.placeholder.com/350'),
                Forms\Components\TextInput::make('focalPerson')
                    ->required()
                    ->maxLength(255)
                    ->default('No Focal Person Data Available'),
                Forms\Components\TextInput::make('cell1')
                    ->maxLength(255),
                Forms\Components\TextInput::make('cell2')
                    ->maxLength(255),
                Forms\Components\TextInput::make('cell3')
                    ->maxLength(255),
                Forms\Components\TextInput::make('websiteLink')
                    ->maxLength(255),
                Forms\Components\TextInput::make('emailLink')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('whatsAppLink')
                    ->maxLength(255),
                Forms\Components\TextInput::make('facebookLink')
                    ->maxLength(255),
                Forms\Components\TextInput::make('instagramLink')
                    ->maxLength(255),
                Forms\Components\TextInput::make('twitterLink')
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkedInLink')
                    ->maxLength(255),
                Forms\Components\TextInput::make('gpsLink')
                    ->maxLength(255),
                Forms\Components\TextInput::make('streetAddress')
                    ->maxLength(255),
                Forms\Components\TextInput::make('operatingHours')
                    ->maxLength(255),
                Forms\Components\Toggle::make('status')
                    ->required(),
                Forms\Components\Select::make('district_id')
                    ->searchable()
                    ->preload()
                    ->relationship('district', 'name')
                    ->required(),
                Forms\Components\Select::make('province_id')
                    ->searchable()
                    ->preload()
                    ->relationship('province', 'name')
                    ->required(),
                Forms\Components\Select::make('country_id')
                    ->searchable()
                    ->preload()
                    ->relationship('country', 'name')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('organisationName')
                    ->searchable(),
                Tables\Columns\TextColumn::make('organisationLogoUrl')
                    ->searchable(),
                Tables\Columns\TextColumn::make('focalPerson')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cell1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cell2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cell3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('websiteLink')
                    ->searchable(),
                Tables\Columns\TextColumn::make('emailLink')
                    ->searchable(),
                Tables\Columns\TextColumn::make('whatsAppLink')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebookLink')
                    ->searchable(),
                Tables\Columns\TextColumn::make('instagramLink')
                    ->searchable(),
                Tables\Columns\TextColumn::make('twitterLink')
                    ->searchable(),
                Tables\Columns\TextColumn::make('linkedInLink')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gpsLink')
                    ->searchable(),
                Tables\Columns\TextColumn::make('streetAddress')
                    ->searchable(),
                Tables\Columns\TextColumn::make('operatingHours')
                    ->searchable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('district.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('province.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('country.name')
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
            'index' => Pages\ListOrganisations::route('/'),
            'create' => Pages\CreateOrganisation::route('/create'),
            'view' => Pages\ViewOrganisation::route('/{record}'),
            'edit' => Pages\EditOrganisation::route('/{record}/edit'),
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
        return 'Content Configurations';
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganisationResource\Pages;
use App\Filament\Resources\OrganisationResource\RelationManagers;
use App\Models\District;
use App\Models\Organisation;
use App\Models\Province;
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
    protected static ?string $label = 'Service Locator';

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
                    ->required()
                    ->default(true),
                Forms\Components\Select::make('country_id')
                    ->searchable()
                    ->preload()
                    ->relationship('country', 'name')
                    ->required(),
                Forms\Components\Select::make('province_id')
                    ->label('Province')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->options(function (callable $get) {
                        $countryId = $get('country_id');
                        if ($countryId) {
                            return Province::query()->where('country_id', $countryId)->pluck('name', 'id');
                        }
                        return [];
                    }),
                Forms\Components\Select::make('district_id')
                    ->label('District')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->options(function (callable $get) {
                        $provinceId = $get('province_id');
                        if ($provinceId) {
                            return District::query()->where('province_id', $provinceId)->pluck('name', 'id');
                        }
                        return [];
                    }),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('organisationName')
                    ->label('Name')
                    ->sortable()
                    ->searchable()
                    ->wrap(),
                Tables\Columns\ImageColumn::make('organisationLogoUrl')
                    ->label('Logo')
                    ->sortable()
                    ->searchable()
                    ->height(100)
                    ->width(100),
                Tables\Columns\TextColumn::make('focalPerson')
                    ->label('Contact Person')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('cell1')
                    ->label('Cell')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Additional Information')
                    ->sortable()
                    ->searchable()
                    ->wrap(),
                Tables\Columns\TextColumn::make('country.name')
                    ->searchable()
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

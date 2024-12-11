<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PollResponseResource\Pages;
use App\Filament\Resources\PollResponseResource\RelationManagers;
use App\Models\Option;
use App\Models\PollResponse;
use App\Models\Question;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class PollResponseResource extends Resource
{
    protected static ?string $model = PollResponse::class;

    public static function form(Form $form): Form
    {
        return $form
            ->columns(3)
            ->schema([
                Forms\Components\Select::make('poll_id')
                    ->relationship('poll', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                Forms\Components\Select::make('question_id')
                    ->relationship('question', 'question')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->options(function (callable $get) {
                        $pollId = $get('poll_id');
                        if ($pollId) {
                            return Question::query()->where('poll_id', $pollId)->pluck('question', 'id');
                        }
                        return [];
                    }),
                Forms\Components\Select::make('option_id')
                    ->relationship('option', 'option')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->options(function (callable $get) {
                        $question_id = $get('question_id');
                        if ($question_id) {
                            return Option::query()->where('question_id', $question_id)->pluck('option', 'id');
                        }
                        return [];
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('poll.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('question.question')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('option.option')
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
            'index' => Pages\ListPollResponses::route('/'),
            'create' => Pages\CreatePollResponse::route('/create'),
            'view' => Pages\ViewPollResponse::route('/{record}'),
            'edit' => Pages\EditPollResponse::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Content Configurations';
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}

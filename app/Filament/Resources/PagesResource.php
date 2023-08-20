<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PagesResource\Pages as FilamentPages;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PagesResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Main data')
                ->schema([
                    Forms\Components\TextInput::make('title')
                        ->reactive()
                        ->afterStateUpdated(function (Set $set, ?string $state) {
                            $set('slug', Str::slug($state));
                        })
                        ->required()
                        ->minLength(10)
                        ->maxLength(65)
                        ->columnSpanFull(),
                    Forms\Components\MarkdownEditor::make('content')
                        ->toolbarButtons([
                            'blockquote',
                            'bold',
                            'bulletList',
                            'codeBlock',
                            'heading',
                            'italic',
                            'link',
                            'orderedList',
                            'redo',
                            'strike',
                            'table',
                            'undo',
                        ])
                        ->columnSpanFull(),
                ])->columnSpan(['sm' => 3, 'md' => 2, 'xl' => 2, '2xl' => 2]),

            Section::make('Metadata')
                ->collapsed()
                ->schema([
                    Forms\Components\TextInput::make('slug')
                        ->required(),
                    Forms\Components\MarkdownEditor::make('description')
                        ->toolbarButtons([
                            'bold',
                            'italic',
                            'link',
                            'redo',
                            'strike',
                            'undo',
                        ])
                        ->required()
                        ->minLength(70)
                        ->maxLength(180),
                    Forms\Components\TagsInput::make('keywords')
                        ->separator(',')
                        ->nestedRecursiveRules([
                            'min:3',
                            'max:50',
                        ]),
                    Forms\Components\Radio::make('status')
                        ->options([
                            'draft' => 'Draft',
                            'published' => 'Published',
                        ])->inline()->default('draft'),
                ])->columnSpan(['sm' => 3, 'md' => 1, 'xl' => 1, '2xl' => 1]),
        ])
        ->columns(['md' => 3, 'xl' => 3]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\SelectColumn::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                    ]),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => FilamentPages\ListPages::route('/'),
            'create' => FilamentPages\CreatePages::route('/create'),
            'edit' => FilamentPages\EditPages::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

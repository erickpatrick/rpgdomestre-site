<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
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

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

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
                        ->minLength(20)
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
                    Forms\Components\DateTimePicker::make('published_at'),
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
                        ->minLength(120)
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
                Tables\Columns\TextColumn::make('published_at')
                    ->searchable(),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
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

<?php

namespace App\Filament\Resources\NewsArticles;

use App\Filament\Resources\NewsArticles\Pages\CreateNewsArticle;
use App\Filament\Resources\NewsArticles\Pages\EditNewsArticle;
use App\Filament\Resources\NewsArticles\Pages\ListNewsArticles;
use App\Models\News;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationLabel = 'News';

    protected static ?string $modelLabel = 'news article';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?int $navigationSort = 12;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-newspaper';
    }

    public static function getNavigationGroup(): string
    {
        return 'Website';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')->required(),
            TextInput::make('slug')->required()->unique(ignoreRecord: true),
            TextInput::make('author')->required(),
            Select::make('status')->options([
                'published' => 'Published',
                'draft' => 'Draft',
            ])->required(),
            Select::make('category_id')->relationship('category', 'name')->searchable()->preload(),
            FileUpload::make('thumbnail_image')->image()->disk('public')->directory('news_images'),
            FileUpload::make('project_images')->image()->multiple()->disk('public')->directory('news_images'),
            RichEditor::make('content')->required()->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('status')->badge(),
                TextColumn::make('author'),
            ])
            ->recordActions([EditAction::make()])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListNewsArticles::route('/'),
            'create' => CreateNewsArticle::route('/create'),
            'edit' => EditNewsArticle::route('/{record}/edit'),
        ];
    }
}

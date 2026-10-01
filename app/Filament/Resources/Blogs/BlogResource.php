<?php

namespace App\Filament\Resources\Blogs;

use App\Filament\Resources\Blogs\Pages\CreateBlog;
use App\Filament\Resources\Blogs\Pages\EditBlog;
use App\Filament\Resources\Blogs\Pages\ListBlogs;
use App\Models\Blog;
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

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationLabel = 'Projects / Blogs';

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?int $navigationSort = 10;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-document-text';
    }

    public static function getNavigationGroup(): string
    {
        return 'Website';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')->required()->maxLength(255),
            TextInput::make('slug')->required()->unique(ignoreRecord: true),
            TextInput::make('author')->required(),
            Select::make('status')->options([
                'Published' => 'Published',
                'Draft' => 'Draft',
                'published' => 'published',
                'draft' => 'draft',
            ])->required(),
            Select::make('categories')->relationship('categories', 'name')->multiple()->preload(),
            FileUpload::make('image')->image()->disk('public')->directory('blog_images'),
            FileUpload::make('project_images')->image()->multiple()->disk('public')->directory('blog_images')->reorderable(),
            RichEditor::make('content')->required()->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('status')->badge(),
                TextColumn::make('author'),
                TextColumn::make('updated_at')->dateTime()->sortable(),
            ])
            ->recordActions([EditAction::make()])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBlogs::route('/'),
            'create' => CreateBlog::route('/create'),
            'edit' => EditBlog::route('/{record}/edit'),
        ];
    }
}

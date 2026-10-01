<?php

namespace App\Filament\Resources\GalleryImages;

use App\Filament\Resources\GalleryImages\Pages\CreateGalleryImage;
use App\Filament\Resources\GalleryImages\Pages\EditGalleryImage;
use App\Filament\Resources\GalleryImages\Pages\ListGalleryImages;
use App\Models\GalleryImage;
use App\Support\Media;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GalleryImageResource extends Resource
{
    protected static ?string $model = GalleryImage::class;

    protected static ?string $navigationLabel = 'Gallery';

    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = 'alt';

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-photo';
    }

    public static function getNavigationGroup(): string
    {
        return 'Presentation';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            FileUpload::make('image')
                ->image()
                ->disk('web')
                ->directory('images/gallery')
                ->required()
                ->columnSpanFull(),
            TextInput::make('alt')->maxLength(160),
            TextInput::make('row')->numeric()->minValue(1)->maxValue(2)->default(1)->required(),
            TextInput::make('sort_order')->numeric()->default(0)->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->getStateUsing(fn (GalleryImage $record): ?string => Media::url($record->image)),
                TextColumn::make('alt')->searchable(),
                TextColumn::make('row')->sortable(),
                TextColumn::make('sort_order')->sortable(),
            ])
            ->defaultSort('sort_order')
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGalleryImages::route('/'),
            'create' => CreateGalleryImage::route('/create'),
            'edit' => EditGalleryImage::route('/{record}/edit'),
        ];
    }
}

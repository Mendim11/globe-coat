<?php

namespace App\Filament\Resources\Finishes;

use App\Filament\Resources\Finishes\Pages\CreateFinish;
use App\Filament\Resources\Finishes\Pages\EditFinish;
use App\Filament\Resources\Finishes\Pages\ListFinishes;
use App\Models\Finish;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FinishResource extends Resource
{
    protected static ?string $model = Finish::class;

    protected static ?string $navigationLabel = 'Finishes';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-swatch';
    }

    public static function getNavigationGroup(): string
    {
        return 'Presentation';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required()->maxLength(120),
            TextInput::make('slug')->required()->unique(ignoreRecord: true)->maxLength(120),
            Select::make('layout')
                ->options([
                    'image-left' => 'Image on the left',
                    'image-right' => 'Image on the right',
                    'banner' => 'Text banner',
                ])
                ->required(),
            TextInput::make('button_label')->maxLength(80),
            TextInput::make('sort_order')->numeric()->default(0)->required(),
            Toggle::make('is_published')->default(true),
            Textarea::make('excerpt')->rows(3)->columnSpanFull(),
            Textarea::make('body')->rows(5)->columnSpanFull(),
            FileUpload::make('image')
                ->image()
                ->disk('web')
                ->directory('images/finishes')
                ->columnSpanFull(),
            Repeater::make('specs')
                ->schema([
                    TextInput::make('label')->required(),
                    TextInput::make('value')->required(),
                ])
                ->columns(2)
                ->columnSpanFull()
                ->defaultItems(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('layout')->badge(),
                TextColumn::make('sort_order')->sortable(),
                IconColumn::make('is_published')->boolean(),
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
            'index' => ListFinishes::route('/'),
            'create' => CreateFinish::route('/create'),
            'edit' => EditFinish::route('/{record}/edit'),
        ];
    }
}

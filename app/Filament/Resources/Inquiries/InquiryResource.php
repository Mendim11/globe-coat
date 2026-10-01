<?php

namespace App\Filament\Resources\Inquiries;

use App\Filament\Resources\Inquiries\Pages\EditInquiry;
use App\Filament\Resources\Inquiries\Pages\ListInquiries;
use App\Models\Inquiry;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class InquiryResource extends Resource
{
    protected static ?string $model = Inquiry::class;

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'email';

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-inbox';
    }

    public static function getNavigationGroup(): string
    {
        return 'Messages';
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('type')->disabled(),
            TextInput::make('first_name')->disabled(),
            TextInput::make('email')->disabled(),
            TextInput::make('phone')->disabled(),
            TextInput::make('subject')->disabled(),
            Textarea::make('message')->rows(6)->disabled()->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type')->badge(),
                TextColumn::make('first_name')->searchable(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('phone'),
                TextColumn::make('subject')->limit(40),
                TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => ListInquiries::route('/'),
            'edit' => EditInquiry::route('/{record}/edit'),
        ];
    }
}

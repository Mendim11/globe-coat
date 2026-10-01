<?php

namespace App\Filament\Resources\SiteSettings;

use App\Filament\Resources\SiteSettings\Pages\EditSiteSetting;
use App\Filament\Resources\SiteSettings\Pages\ListSiteSettings;
use App\Models\SiteSetting;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;

    protected static ?string $navigationLabel = 'Site settings';

    protected static ?string $modelLabel = 'site setting';

    protected static ?int $navigationSort = 1;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-cog-6-tooth';
    }

    public static function getNavigationGroup(): string
    {
        return 'Presentation';
    }

    public static function canCreate(): bool
    {
        return SiteSetting::query()->doesntExist();
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Header')->components([
                TextInput::make('phone_label'),
                TextInput::make('phone'),
                TextInput::make('email_label'),
                TextInput::make('email')->email(),
            ])->columns(2),
            Section::make('Hero')->components([
                TextInput::make('hero_title')->required()->columnSpanFull(),
                TextInput::make('hero_subtitle')->columnSpanFull(),
                FileUpload::make('hero_image')->image()->disk('web')->directory('images')->columnSpanFull(),
            ]),
            Section::make('Page copy')->components([
                TextInput::make('atmosphere_title'),
                Textarea::make('atmosphere_body')->rows(4)->columnSpanFull(),
                TextInput::make('gallery_title'),
                TextInput::make('cta_title'),
                Textarea::make('cta_body')->rows(3)->columnSpanFull(),
                TextInput::make('cta_button_label'),
            ])->columns(2),
            Section::make('Footer')->components([
                TextInput::make('footer_kicker'),
                TextInput::make('footer_heading'),
                Textarea::make('footer_intro')->rows(3)->columnSpanFull(),
                TextInput::make('chat_label'),
                Textarea::make('address')->rows(3)->columnSpanFull(),
                TextInput::make('together_heading')->columnSpanFull(),
                TextInput::make('together_link_label'),
                TextInput::make('facebook_url'),
                TextInput::make('instagram_url'),
                TextInput::make('x_url'),
                TextInput::make('youtube_url'),
            ])->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('email'),
                TextColumn::make('phone'),
                TextColumn::make('updated_at')->dateTime(),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSiteSettings::route('/'),
            'edit' => EditSiteSetting::route('/{record}/edit'),
        ];
    }
}

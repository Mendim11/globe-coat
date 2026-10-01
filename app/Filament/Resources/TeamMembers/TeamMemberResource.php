<?php

namespace App\Filament\Resources\TeamMembers;

use App\Filament\Resources\TeamMembers\Pages\CreateTeamMember;
use App\Filament\Resources\TeamMembers\Pages\EditTeamMember;
use App\Filament\Resources\TeamMembers\Pages\ListTeamMembers;
use App\Models\TeamMember;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TeamMemberResource extends Resource
{
    protected static ?string $model = TeamMember::class;

    protected static ?string $recordTitleAttribute = 'first_name';

    protected static ?int $navigationSort = 15;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-user-group';
    }

    public static function getNavigationGroup(): string
    {
        return 'Website';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('first_name')->required(),
            TextInput::make('last_name')->required(),
            TextInput::make('position'),
            TextInput::make('email')->email(),
            TextInput::make('phone_number'),
            FileUpload::make('image')->image()->disk('public')->directory('team'),
            Textarea::make('personal_details')->columnSpanFull(),
            TextInput::make('facebook'),
            TextInput::make('twitter'),
            TextInput::make('linkedin'),
            TextInput::make('instagram'),
            TextInput::make('business_growth')->numeric(),
            TextInput::make('money_management')->numeric(),
            TextInput::make('business_consulting')->numeric(),
            TextInput::make('team_work')->numeric(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')->searchable(),
                TextColumn::make('last_name')->searchable(),
                TextColumn::make('position'),
                TextColumn::make('email'),
            ])
            ->recordActions([EditAction::make()])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTeamMembers::route('/'),
            'create' => CreateTeamMember::route('/create'),
            'edit' => EditTeamMember::route('/{record}/edit'),
        ];
    }
}

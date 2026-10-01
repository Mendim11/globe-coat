<?php

namespace App\Filament\Resources\NewsArticles\Pages;

use App\Filament\Resources\NewsArticles\NewsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNewsArticles extends ListRecords
{
    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [CreateAction::make()];
    }
}

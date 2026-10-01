<?php

namespace App\Filament\Resources\NewsArticles\Pages;

use App\Filament\Resources\NewsArticles\NewsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditNewsArticle extends EditRecord
{
    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [DeleteAction::make()];
    }
}

<?php

namespace App\Filament\Resources\FlowResource\Pages;

use App\Filament\Resources\FlowResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFlows extends ManageRecords
{
    protected static string $resource = FlowResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

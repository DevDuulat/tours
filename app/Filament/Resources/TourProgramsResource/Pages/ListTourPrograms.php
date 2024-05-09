<?php

namespace App\Filament\Resources\TourProgramsResource\Pages;

use App\Filament\Resources\TourProgramsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTourPrograms extends ListRecords
{
    protected static string $resource = TourProgramsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

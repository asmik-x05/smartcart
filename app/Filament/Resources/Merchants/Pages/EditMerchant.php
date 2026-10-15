<?php

namespace App\Filament\Resources\Merchants\Pages;

use App\Filament\Resources\Merchants\MerchantResource;
use App\Mail\MerchantCredentials;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Mail;
use Override;

class EditMerchant extends EditRecord
{
    protected static string $resource = MerchantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    #[Override]
    protected function mutateFormDataBeforeSave(array $data): array
    {
        $merchant = $this->getRecord();

        if ($data['status'] === 'approved' && $merchant->status !== 'approved') {
            $password = rand(10000000, 99999999);
            $data['password'] = bcrypt($password);
            Mail::to($data['email'])->send(new MerchantCredentials($data, $password));
        }

        return $data;
    }
}

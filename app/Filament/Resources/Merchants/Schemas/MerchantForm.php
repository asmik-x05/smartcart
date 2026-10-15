<?php

namespace App\Filament\Resources\Merchants\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class MerchantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components(
                Section::make('Merchant Information')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->columnSpan(2),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required()
                            ->columnSpan(2),                        
                        TextInput::make('contact_no')
                            ->required()
                            ->columnSpan(1),
                            TextInput::make('store_name')
                            ->required()
                            ->columnSpan(2),
                            Select::make('status')
                            ->options(['pending' => 'Pending', 'approved' => 'Approved', 'rejected' => 'Rejected'])
                            ->default('pending')
                            ->required()
                            ->columnSpan(1),
                            Textarea::make('message')
                                ->required()
                                ->columnSpanFull(),
                    ])->columnSpanFull()
                    ->columns(4)
            );
    }
}

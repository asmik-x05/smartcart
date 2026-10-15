<?php

namespace App\Filament\Merchant\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components(Section::make('Product Details')
                ->components([                
                TextInput::make('name')
                    ->required()
                    ->columnSpan(3),
                TextInput::make('slug')
                    ->required()
                    ->columnSpan(3),
                    TextInput::make('price')
                        ->required()
                        ->numeric()
                        ->prefix('Rs.')
                        ->columnSpan(2),
                    TextInput::make('discount')
                        ->required()
                        ->numeric()
                        ->default(0.0)
                        ->columnSpan(2),
                    TextInput::make('stock')
                        ->required()
                        ->numeric()
                        ->default(0)
                        ->columnSpan(2),
                RichEditor::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('images')
                    ->required()
                    ->multiple()
                    ->imageEditor()
                    ->columnSpanFull(),
            ])->columnSpanFull()
            ->columns(6)
            );
    }
}

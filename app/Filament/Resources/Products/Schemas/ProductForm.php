<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('sku')
                    ->label('SKU')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Textarea::make('short_description')
                    ->columnSpanFull(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('cost_price')
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('sale_price')
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('weight')
                    ->numeric(),
                TextInput::make('dimensions'),
                TextInput::make('brand'),
                TextInput::make('model'),
                Textarea::make('specifications')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image(),
                Textarea::make('images')
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required(),
                Toggle::make('is_featured')
                    ->required(),
                TextInput::make('stock_status')
                    ->required()
                    ->default('in_stock'),
                TextInput::make('reorder_point')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}

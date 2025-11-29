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
                    ->label(__('products.name'))
                    ->required(),
                TextInput::make('slug')
                    ->label(__('products.slug'))
                    ->required(),
                TextInput::make('sku')
                    ->label(__('products.sku'))
                    ->required(),
                Textarea::make('description')
                    ->label(__('products.description'))
                    ->columnSpanFull(),
                Textarea::make('short_description')
                    ->label(__('products.short_description'))
                    ->columnSpanFull(),
                Select::make('category_id')
                    ->label(__('products.category'))
                    ->relationship('category', 'name')
                    ->required(),
                TextInput::make('price')
                    ->label(__('products.price'))
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('cost_price')
                    ->label(__('products.cost_price'))
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('sale_price')
                    ->label(__('products.sale_price'))
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('weight')
                    ->label(__('products.weight'))
                    ->numeric(),
                TextInput::make('dimensions')
                    ->label(__('products.dimensions')),
                TextInput::make('brand')
                    ->label(__('products.brand')),
                TextInput::make('model')
                    ->label(__('products.model')),
                Textarea::make('specifications')
                    ->label(__('products.specifications'))
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label(__('products.image'))
                    ->image(),
                Textarea::make('images')
                    ->label(__('products.images'))
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label(__('products.is_active'))
                    ->required(),
                Toggle::make('is_featured')
                    ->label(__('products.is_featured'))
                    ->required(),
                TextInput::make('stock_status')
                    ->label(__('products.stock_status'))
                    ->required()
                    ->default('in_stock'),
                TextInput::make('reorder_point')
                    ->label(__('products.reorder_point'))
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}

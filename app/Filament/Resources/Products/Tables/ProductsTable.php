<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('products.name'))
                    ->searchable(),
                TextColumn::make('slug')
                    ->label(__('products.slug'))
                    ->searchable(),
                TextColumn::make('sku')
                    ->label(__('products.sku'))
                    ->searchable(),
                TextColumn::make('category.name')
                    ->label(__('products.category'))
                    ->searchable(),
                TextColumn::make('price')
                    ->label(__('products.price'))
                    ->money()
                    ->sortable(),
                TextColumn::make('cost_price')
                    ->label(__('products.cost_price'))
                    ->money()
                    ->sortable(),
                TextColumn::make('sale_price')
                    ->label(__('products.sale_price'))
                    ->money()
                    ->sortable(),
                TextColumn::make('weight')
                    ->label(__('products.weight'))
                    ->numeric()
                    ->sortable(),
                TextColumn::make('dimensions')
                    ->label(__('products.dimensions'))
                    ->searchable(),
                TextColumn::make('brand')
                    ->label(__('products.brand'))
                    ->searchable(),
                TextColumn::make('model')
                    ->label(__('products.model'))
                    ->searchable(),
                ImageColumn::make('image')
                    ->label(__('products.image')),
                IconColumn::make('is_active')
                    ->label(__('products.is_active'))
                    ->boolean(),
                IconColumn::make('is_featured')
                    ->label(__('products.is_featured'))
                    ->boolean(),
                TextColumn::make('stock_status')
                    ->label(__('products.stock_status'))
                    ->searchable(),
                TextColumn::make('reorder_point')
                    ->label(__('products.reorder_point'))
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label(__('common.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label(__('common.updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}

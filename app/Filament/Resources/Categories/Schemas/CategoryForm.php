<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label(__('categories.name'))
                    ->required(),
                TextInput::make('slug')
                    ->label(__('categories.slug'))
                    ->required(),
                Textarea::make('description')
                    ->label(__('categories.description'))
                    ->columnSpanFull(),
                Select::make('parent_id')
                    ->label(__('categories.parent'))
                    ->relationship('parent', 'name'),
                FileUpload::make('image')
                    ->label(__('categories.image'))
                    ->image(),
                Toggle::make('is_active')
                    ->label(__('categories.is_active'))
                    ->required(),
                TextInput::make('sort_order')
                    ->label(__('categories.sort_order'))
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}

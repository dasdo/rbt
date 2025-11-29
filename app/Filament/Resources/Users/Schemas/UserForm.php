<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label(__('users.name'))
                    ->required(),
                TextInput::make('email')
                    ->label(__('users.email'))
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at')
                    ->label(__('users.email') . ' Verified'),
                TextInput::make('password')
                    ->label(__('users.password'))
                    ->password()
                    ->required(),
                TextInput::make('role')
                    ->label(__('users.role'))
                    ->required()
                    ->default('customer'),
                TextInput::make('phone')
                    ->label(__('users.phone'))
                    ->tel(),
                Textarea::make('address')
                    ->label(__('users.address'))
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->label(__('users.is_active'))
                    ->required(),
            ]);
    }
}

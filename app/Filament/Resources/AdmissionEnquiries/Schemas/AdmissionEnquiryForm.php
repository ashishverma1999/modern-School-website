<?php

namespace App\Filament\Resources\AdmissionEnquiries\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class AdmissionEnquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Student and guardian')
                    ->columns(2)
                    ->schema([
                        TextInput::make('student_name')->required()->maxLength(120),
                        TextInput::make('guardian_name')->maxLength(120),
                        TextInput::make('phone')->required()->maxLength(30),
                        TextInput::make('email')->email()->maxLength(150),
                        Select::make('class_applied')
                            ->options([
                                'Nursery' => 'Nursery',
                                'LKG' => 'LKG',
                                'UKG' => 'UKG',
                                'Class I' => 'Class I',
                                'Class II' => 'Class II',
                                'Class III' => 'Class III',
                                'Class IV' => 'Class IV',
                                'Class V' => 'Class V',
                                'Class VI' => 'Class VI',
                                'Class VII' => 'Class VII',
                                'Class VIII' => 'Class VIII',
                            ])
                            ->required(),
                        TextInput::make('student_age')->numeric()->minValue(2)->maxValue(25),
                        DatePicker::make('preferred_visit_date'),
                        Select::make('status')
                            ->options([
                                'new' => 'New',
                                'contacted' => 'Contacted',
                                'visited' => 'Visited',
                                'admitted' => 'Admitted',
                                'closed' => 'Closed',
                            ])
                            ->default('new')
                            ->required(),
                        Textarea::make('message')->rows(5)->columnSpanFull(),
                    ]),
            ]);
    }
}

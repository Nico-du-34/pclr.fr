<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Sight;
use App\Models\Auto;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Layouts\Columns;

class AutoResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Auto::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('id')
                ->type('number')
                ->title('ID'),
            Input::make('type')
                ->title('Type')
                ->required(),
            Input::make('categorie_id')
                ->title('Categorie')
                ->required(),
            Input::make('name')
                ->title('Nom')
                ->required(),
            Input::make('label')
                ->title('Label')
                ->required(),
            Input::make('prix')
                ->title('Prix')
                ->type('number')
                ->mask([
                    'mask' => '200 000,25',
                    'numericInput' => true
                ])
                ->required(),
            Input::make('disponibilite')
                ->title('Stock')
                ->options([
                    'en_stock'   => 'En Stock',
                    'hors_stock' => 'Hors Stock',
                ])
                ->required(),
            Input::make('image_url')
                ->title('Image URL'),
            Input::make('created_at')
                ->title('Created At')
                ->type('url'),
            Input::make('updated_at')
                ->title('Updated At'),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('type'),
            TD::make('categorie_id'),
            TD::make('label'),
            TD::make('prix'),
            TD::make('disponibilite'),
            TD::make('image_url'),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [
            Sight::make('type'),
            Sight::make('categorie_id'),
            Sight::make('label'),
            Sight::make('prix'),
            Sight::make('disponibilite'),
            Sight::make('image_url'),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }

    /**
     * Get the number of models to return per page
     *
     * @return int
     */
    public static function perPage(): int
    {
        return 30;
    }

    /**
     * Get the permission key for the resource.
     *
     * @return string|null
     */
    public static function permission(): ?string
    {
        return null;
    }

    /**
     * Get the resource should be displayed in the navigation
     *
     * @return bool
     */
    public static function displayInNavigation(): bool
    {
        return true;
    }
}
<?php

namespace Filament\Tables\Columns;

use Filament\Support\Components\ViewComponent;
use Filament\Support\Concerns\HasExtraAttributes;
use Illuminate\Support\Traits\Conditionable;

class Column extends ViewComponent
{
    use Concerns\BelongsToTable;
    use Concerns\CanAggregateRelatedModels;
    use Concerns\CanBeHidden;
    use Concerns\CanBeSearchable;
    use Concerns\CanBeSortable;
    use Concerns\CanBeToggled;
    use Concerns\CanCallAction;
    use Concerns\CanOpenUrl;
    use Concerns\EvaluatesClosures;
    use Concerns\HasAlignment;
    use Concerns\HasExtraHeaderAttributes;
    use Concerns\HasLabel;
    use Concerns\HasName;
    use Concerns\HasRecord;
    use Concerns\HasState;
    use Concerns\HasTooltip;
    use Concerns\InteractsWithTableQuery;
    use Conditionable;
    use HasExtraAttributes;

    protected string $viewIdentifier = 'column';

    final public function __construct(string $name)
    {
        $this->name($name);
    }

    public static function make(string $name): static
    {
        $static = app(static::class, ['name' => $name]);
        $static->setUp();

        return $static;
    }
}

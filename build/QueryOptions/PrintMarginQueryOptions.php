<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintMargin resources
 *
 * Available select fields:
 * - bottom
 * - left
 * - right
 * - top
 */
class PrintMarginQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintMargin
     */
    public const FIELD_BOTTOM = 'bottom';
    public const FIELD_LEFT = 'left';
    public const FIELD_RIGHT = 'right';
    public const FIELD_TOP = 'top';

    /**
     * Select specific PrintMargin properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

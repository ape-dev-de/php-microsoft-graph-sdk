<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExpressionInputObject resources
 *
 * Available select fields:
 * - definition
 * - items
 */
class ExpressionInputObjectQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExpressionInputObject
     */
    public const FIELD_DEFINITION = 'definition';
    public const FIELD_ITEMS = 'items';

    /**
     * Select specific ExpressionInputObject properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

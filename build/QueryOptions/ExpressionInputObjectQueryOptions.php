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
    public const FIELD_DEFINITION = 'definition';
    public const FIELD_ITEMS = 'items';

    /**
     * Select specific ExpressionInputObject properties
     * 
     * @param array<string> $select Use ExpressionInputObjectQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IntegerRange resources
 *
 * Available select fields:
 * - end
 * - start
 */
class IntegerRangeQueryOptions extends QueryOptions
{
    public const FIELD_END = 'end';
    public const FIELD_START = 'start';

    /**
     * Select specific IntegerRange properties
     * 
     * @param array<string> $select Use IntegerRangeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

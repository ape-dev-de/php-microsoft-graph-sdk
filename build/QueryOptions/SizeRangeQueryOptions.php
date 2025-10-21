<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SizeRange resources
 *
 * Available select fields:
 * - maximumSize
 * - minimumSize
 */
class SizeRangeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SizeRange
     */
    public const FIELD_MAXIMUM_SIZE = 'maximumSize';
    public const FIELD_MINIMUM_SIZE = 'minimumSize';

    /**
     * Select specific SizeRange properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

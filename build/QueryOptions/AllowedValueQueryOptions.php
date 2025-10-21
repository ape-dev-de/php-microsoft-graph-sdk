<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AllowedValue resources
 *
 * Available select fields:
 * - isActive
 */
class AllowedValueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AllowedValue
     */
    public const FIELD_IS_ACTIVE = 'isActive';

    /**
     * Select specific AllowedValue properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

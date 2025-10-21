<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PolicyLocation resources
 *
 * Available select fields:
 * - value
 */
class PolicyLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PolicyLocation
     */
    public const FIELD_VALUE = 'value';

    /**
     * Select specific PolicyLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

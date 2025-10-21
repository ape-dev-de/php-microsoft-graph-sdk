<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeType resources
 *
 * Available select fields:
 */
class AttributeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttributeType
     */

    /**
     * Select specific AttributeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

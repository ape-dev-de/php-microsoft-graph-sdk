<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttributeSet resources
 *
 * Available select fields:
 */
class AttributeSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttributeSet
     */

    /**
     * Select specific AttributeSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

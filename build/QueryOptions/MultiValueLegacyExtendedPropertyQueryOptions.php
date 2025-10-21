<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiValueLegacyExtendedProperty resources
 *
 * Available select fields:
 */
class MultiValueLegacyExtendedPropertyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MultiValueLegacyExtendedProperty
     */

    /**
     * Select specific MultiValueLegacyExtendedProperty properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

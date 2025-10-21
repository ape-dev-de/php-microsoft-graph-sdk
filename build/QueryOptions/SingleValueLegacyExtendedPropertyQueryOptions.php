<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SingleValueLegacyExtendedProperty resources
 *
 * Available select fields:
 */
class SingleValueLegacyExtendedPropertyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SingleValueLegacyExtendedProperty
     */

    /**
     * Select specific SingleValueLegacyExtendedProperty properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

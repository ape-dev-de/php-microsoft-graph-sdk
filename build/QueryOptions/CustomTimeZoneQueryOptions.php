<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomTimeZone resources
 *
 * Available select fields:
 */
class CustomTimeZoneQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomTimeZone
     */

    /**
     * Select specific CustomTimeZone properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

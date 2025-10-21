<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharingCapabilities resources
 *
 * Available select fields:
 */
class SharingCapabilitiesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharingCapabilities
     */

    /**
     * Select specific SharingCapabilities properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

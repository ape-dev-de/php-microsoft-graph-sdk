<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharingDomainRestrictionMode resources
 *
 * Available select fields:
 */
class SharingDomainRestrictionModeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharingDomainRestrictionMode
     */

    /**
     * Select specific SharingDomainRestrictionMode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AdminConsentRequestPolicy resources
 *
 * Available select fields:
 */
class AdminConsentRequestPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AdminConsentRequestPolicy
     */

    /**
     * Select specific AdminConsentRequestPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

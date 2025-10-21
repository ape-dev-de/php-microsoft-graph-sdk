<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PartnersBillingManifest resources
 *
 * Available select fields:
 */
class PartnersBillingManifestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PartnersBillingManifest
     */

    /**
     * Select specific PartnersBillingManifest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AzureCommunicationServicesUserIdentity resources
 *
 * Available select fields:
 */
class AzureCommunicationServicesUserIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AzureCommunicationServicesUserIdentity
     */

    /**
     * Select specific AzureCommunicationServicesUserIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

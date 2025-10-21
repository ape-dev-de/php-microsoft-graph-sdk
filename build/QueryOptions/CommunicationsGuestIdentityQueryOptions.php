<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommunicationsGuestIdentity resources
 *
 * Available select fields:
 */
class CommunicationsGuestIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CommunicationsGuestIdentity
     */

    /**
     * Select specific CommunicationsGuestIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

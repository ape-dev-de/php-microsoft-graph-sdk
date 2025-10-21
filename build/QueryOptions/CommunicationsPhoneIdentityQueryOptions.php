<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommunicationsPhoneIdentity resources
 *
 * Available select fields:
 */
class CommunicationsPhoneIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CommunicationsPhoneIdentity
     */

    /**
     * Select specific CommunicationsPhoneIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

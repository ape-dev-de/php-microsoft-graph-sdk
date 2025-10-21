<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommunicationsEncryptedIdentity resources
 *
 * Available select fields:
 */
class CommunicationsEncryptedIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CommunicationsEncryptedIdentity
     */

    /**
     * Select specific CommunicationsEncryptedIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

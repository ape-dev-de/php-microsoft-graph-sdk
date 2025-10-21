<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommunicationsApplicationIdentity resources
 *
 * Available select fields:
 */
class CommunicationsApplicationIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CommunicationsApplicationIdentity
     */

    /**
     * Select specific CommunicationsApplicationIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

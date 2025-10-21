<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FederatedIdentityCredential resources
 *
 * Available select fields:
 */
class FederatedIdentityCredentialQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FederatedIdentityCredential
     */

    /**
     * Select specific FederatedIdentityCredential properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OAuth2PermissionGrant resources
 *
 * Available select fields:
 */
class OAuth2PermissionGrantQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OAuth2PermissionGrant
     */

    /**
     * Select specific OAuth2PermissionGrant properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

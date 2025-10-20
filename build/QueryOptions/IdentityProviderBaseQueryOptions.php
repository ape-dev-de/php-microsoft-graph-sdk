<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityProviderBase resources
 *
 * Available select fields:
 * - displayName
 */
class IdentityProviderBaseQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific IdentityProviderBase properties
     * 
     * @param array<string> $select Use IdentityProviderBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

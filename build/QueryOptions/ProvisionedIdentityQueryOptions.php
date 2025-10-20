<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProvisionedIdentity resources
 *
 * Available select fields:
 * - details
 * - identityType
 */
class ProvisionedIdentityQueryOptions extends QueryOptions
{
    public const FIELD_DETAILS = 'details';
    public const FIELD_IDENTITY_TYPE = 'identityType';

    /**
     * Select specific ProvisionedIdentity properties
     * 
     * @param array<string> $select Use ProvisionedIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

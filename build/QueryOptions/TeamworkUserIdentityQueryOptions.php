<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeamworkUserIdentity resources
 *
 * Available select fields:
 * - userIdentityType
 */
class TeamworkUserIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TeamworkUserIdentity
     */
    public const FIELD_USER_IDENTITY_TYPE = 'userIdentityType';

    /**
     * Select specific TeamworkUserIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

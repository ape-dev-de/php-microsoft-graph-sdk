<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharePointIdentity resources
 *
 * Available select fields:
 * - loginName
 */
class SharePointIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SharePointIdentity
     */
    public const FIELD_LOGIN_NAME = 'loginName';

    /**
     * Select specific SharePointIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

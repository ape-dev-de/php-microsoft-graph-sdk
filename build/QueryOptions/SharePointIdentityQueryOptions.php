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
    public const FIELD_LOGIN_NAME = 'loginName';

    /**
     * Select specific SharePointIdentity properties
     * 
     * @param array<string> $select Use SharePointIdentityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

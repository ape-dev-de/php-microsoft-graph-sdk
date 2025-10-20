<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharePointIdentitySet resources
 *
 * Available select fields:
 * - group
 * - siteGroup
 * - siteUser
 */
class SharePointIdentitySetQueryOptions extends QueryOptions
{
    public const FIELD_GROUP = 'group';
    public const FIELD_SITE_GROUP = 'siteGroup';
    public const FIELD_SITE_USER = 'siteUser';

    /**
     * Select specific SharePointIdentitySet properties
     * 
     * @param array<string> $select Use SharePointIdentitySetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

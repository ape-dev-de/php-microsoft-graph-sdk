<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Permission resources
 *
 * Available select fields:
 * - expirationDateTime
 * - grantedTo
 * - grantedToIdentities
 * - grantedToIdentitiesV2
 * - grantedToV2
 * - hasPassword
 * - inheritedFrom
 * - invitation
 * - link
 * - roles
 * - shareId
 */
class PermissionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Permission
     */
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_GRANTED_TO = 'grantedTo';
    public const FIELD_GRANTED_TO_IDENTITIES = 'grantedToIdentities';
    public const FIELD_GRANTED_TO_IDENTITIES_V2 = 'grantedToIdentitiesV2';
    public const FIELD_GRANTED_TO_V2 = 'grantedToV2';
    public const FIELD_HAS_PASSWORD = 'hasPassword';
    public const FIELD_INHERITED_FROM = 'inheritedFrom';
    public const FIELD_INVITATION = 'invitation';
    public const FIELD_LINK = 'link';
    public const FIELD_ROLES = 'roles';
    public const FIELD_SHARE_ID = 'shareId';

    /**
     * Select specific Permission properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

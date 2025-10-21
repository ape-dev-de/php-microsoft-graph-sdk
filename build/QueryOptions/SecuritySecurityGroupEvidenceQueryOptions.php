<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySecurityGroupEvidence resources
 *
 * Available select fields:
 * - activeDirectoryObjectGuid
 * - displayName
 * - distinguishedName
 * - friendlyName
 * - securityGroupId
 * - sid
 */
class SecuritySecurityGroupEvidenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySecurityGroupEvidence
     */
    public const FIELD_ACTIVE_DIRECTORY_OBJECT_GUID = 'activeDirectoryObjectGuid';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_DISTINGUISHED_NAME = 'distinguishedName';
    public const FIELD_FRIENDLY_NAME = 'friendlyName';
    public const FIELD_SECURITY_GROUP_ID = 'securityGroupId';
    public const FIELD_SID = 'sid';

    /**
     * Select specific SecuritySecurityGroupEvidence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

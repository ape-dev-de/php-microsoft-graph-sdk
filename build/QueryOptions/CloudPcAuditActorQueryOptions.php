<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcAuditActor resources
 *
 * Available select fields:
 * - applicationDisplayName
 * - applicationId
 * - ipAddress
 * - remoteTenantId
 * - remoteUserId
 * - servicePrincipalName
 * - userId
 * - userPermissions
 * - userPrincipalName
 * - userRoleScopeTags
 */
class CloudPcAuditActorQueryOptions extends QueryOptions
{
    public const FIELD_APPLICATION_DISPLAY_NAME = 'applicationDisplayName';
    public const FIELD_APPLICATION_ID = 'applicationId';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_REMOTE_TENANT_ID = 'remoteTenantId';
    public const FIELD_REMOTE_USER_ID = 'remoteUserId';
    public const FIELD_SERVICE_PRINCIPAL_NAME = 'servicePrincipalName';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_USER_PERMISSIONS = 'userPermissions';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';
    public const FIELD_USER_ROLE_SCOPE_TAGS = 'userRoleScopeTags';

    /**
     * Select specific CloudPcAuditActor properties
     * 
     * @param array<string> $select Use CloudPcAuditActorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

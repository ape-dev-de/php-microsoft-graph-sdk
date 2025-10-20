<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuditActor resources
 *
 * Available select fields:
 * - applicationDisplayName
 * - applicationId
 * - auditActorType
 * - ipAddress
 * - servicePrincipalName
 * - userId
 * - userPermissions
 * - userPrincipalName
 */
class AuditActorQueryOptions extends QueryOptions
{
    public const FIELD_APPLICATION_DISPLAY_NAME = 'applicationDisplayName';
    public const FIELD_APPLICATION_ID = 'applicationId';
    public const FIELD_AUDIT_ACTOR_TYPE = 'auditActorType';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_SERVICE_PRINCIPAL_NAME = 'servicePrincipalName';
    public const FIELD_USER_ID = 'userId';
    public const FIELD_USER_PERMISSIONS = 'userPermissions';
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific AuditActor properties
     * 
     * @param array<string> $select Use AuditActorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

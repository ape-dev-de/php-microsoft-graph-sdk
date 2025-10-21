<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcAuditActor
 */
class CloudPcAuditActor
{
    public function __construct(
        /** Name of the application. */
        public ?string $applicationDisplayName = null,
        /** Microsoft Entra application ID. */
        public ?string $applicationId = null,
        /** IP address. */
        public ?string $ipAddress = null,
        /** The delegated partner tenant ID. */
        public ?string $remoteTenantId = null,
        /** The delegated partner user ID. */
        public ?string $remoteUserId = null,
        /** Service Principal Name (SPN). */
        public ?string $servicePrincipalName = null,
        /** Microsoft Entra user ID. */
        public ?string $userId = null,
        /** @var string[] List of user permissions and application permissions when the audit event was performed. */
        public array $userPermissions = [],
        /** User Principal Name (UPN). */
        public ?string $userPrincipalName = null,
        /** @var string[] List of role scope tags. */
        public array $userRoleScopeTags = []
    ) {}
}

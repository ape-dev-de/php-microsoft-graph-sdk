<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditActor
 */
class AuditActor
{
    public function __construct(
        /** Name of the Application. */
        public ?string $applicationDisplayName = null,
        /** AAD Application Id. */
        public ?string $applicationId = null,
        /** Actor Type. */
        public ?string $auditActorType = null,
        /** IPAddress. */
        public ?string $ipAddress = null,
        /** Service Principal Name (SPN). */
        public ?string $servicePrincipalName = null,
        /** User Id. */
        public ?string $userId = null,
        /** @var string[] List of user permissions when the audit was performed. */
        public array $userPermissions = [],
        /** A class containing the properties for Audit Actor. */
        public ?string $userPrincipalName = null
    ) {}
}

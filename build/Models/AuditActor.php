<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditActor
 */
class AuditActor
{
    /** Name of the Application. */
    public ?string $applicationDisplayName = null;

    /** AAD Application Id. */
    public ?string $applicationId = null;

    /** Actor Type. */
    public ?string $auditActorType = null;

    /** IPAddress. */
    public ?string $ipAddress = null;

    /** Service Principal Name (SPN). */
    public ?string $servicePrincipalName = null;

    /** User Id. */
    public ?string $userId = null;

    /** 
     * List of user permissions when the audit was performed.
     * @var string[]
     */
    public array $userPermissions = [];

    /** User Principal Name (UPN). */
    public ?string $userPrincipalName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['applicationDisplayName'])) {
            $this->applicationDisplayName = $data['applicationDisplayName'];
        }
        if (isset($data['applicationId'])) {
            $this->applicationId = $data['applicationId'];
        }
        if (isset($data['auditActorType'])) {
            $this->auditActorType = $data['auditActorType'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = $data['ipAddress'];
        }
        if (isset($data['servicePrincipalName'])) {
            $this->servicePrincipalName = $data['servicePrincipalName'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
        if (isset($data['userPermissions'])) {
            $this->userPermissions = $data['userPermissions'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
    }
}

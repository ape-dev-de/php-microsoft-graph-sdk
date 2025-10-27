<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcAuditActor
 */
class CloudPcAuditActor
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Name of the application. */
    public ?string $applicationDisplayName = null;

    /** Microsoft Entra application ID. */
    public ?string $applicationId = null;

    /** IP address. */
    public ?string $ipAddress = null;

    /** The delegated partner tenant ID. */
    public ?string $remoteTenantId = null;

    /** The delegated partner user ID. */
    public ?string $remoteUserId = null;

    /** Service Principal Name (SPN). */
    public ?string $servicePrincipalName = null;

    /** Microsoft Entra user ID. */
    public ?string $userId = null;

    /** 
     * List of user permissions and application permissions when the audit event was performed.
     * @var string[]
     */
    public array $userPermissions = [];

    /** User Principal Name (UPN). */
    public ?string $userPrincipalName = null;

    /** 
     * List of role scope tags.
     * @var CloudPcUserRoleScopeTagInfo[]
     */
    public array $userRoleScopeTags = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['applicationDisplayName'])) {
            $this->applicationDisplayName = $data['applicationDisplayName'];
        }
        if (isset($data['applicationId'])) {
            $this->applicationId = $data['applicationId'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = $data['ipAddress'];
        }
        if (isset($data['remoteTenantId'])) {
            $this->remoteTenantId = $data['remoteTenantId'];
        }
        if (isset($data['remoteUserId'])) {
            $this->remoteUserId = $data['remoteUserId'];
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
        if (isset($data['userRoleScopeTags'])) {
            $this->userRoleScopeTags = $data['userRoleScopeTags'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

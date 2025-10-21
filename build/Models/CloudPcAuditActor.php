<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcAuditActor
 */
class CloudPcAuditActor
{
    /**
     * Name of the application.
     */
    private ?string $applicationDisplayName;

    /**
     * Microsoft Entra application ID.
     */
    private ?string $applicationId;

    /**
     * IP address.
     */
    private ?string $ipAddress;

    /**
     * The delegated partner tenant ID.
     */
    private ?string $remoteTenantId;

    /**
     * The delegated partner user ID.
     */
    private ?string $remoteUserId;

    /**
     * Service Principal Name (SPN).
     */
    private ?string $servicePrincipalName;

    /**
     * Microsoft Entra user ID.
     */
    private ?string $userId;

    /**
     * List of user permissions and application permissions when the audit event was performed.
     * @var string[]
     */
    private array $userPermissions = [];

    /**
     * User Principal Name (UPN).
     */
    private ?string $userPrincipalName;

    /**
     * List of role scope tags.
     * @var string[]
     */
    private array $userRoleScopeTags = [];


    public function getApplicationDisplayName(): ?string
    {
        return $this->applicationDisplayName;
    }

    public function setApplicationDisplayName(?string $applicationDisplayName): self
    {
        $this->applicationDisplayName = $applicationDisplayName;
        return $this;
    }

    public function getApplicationId(): ?string
    {
        return $this->applicationId;
    }

    public function setApplicationId(?string $applicationId): self
    {
        $this->applicationId = $applicationId;
        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    public function getRemoteTenantId(): ?string
    {
        return $this->remoteTenantId;
    }

    public function setRemoteTenantId(?string $remoteTenantId): self
    {
        $this->remoteTenantId = $remoteTenantId;
        return $this;
    }

    public function getRemoteUserId(): ?string
    {
        return $this->remoteUserId;
    }

    public function setRemoteUserId(?string $remoteUserId): self
    {
        $this->remoteUserId = $remoteUserId;
        return $this;
    }

    public function getServicePrincipalName(): ?string
    {
        return $this->servicePrincipalName;
    }

    public function setServicePrincipalName(?string $servicePrincipalName): self
    {
        $this->servicePrincipalName = $servicePrincipalName;
        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getUserPermissions(): array
    {
        return $this->userPermissions;
    }

    /**
     * @param string[] $userPermissions
     */
    public function setUserPermissions(array $userPermissions): self
    {
        $this->userPermissions = $userPermissions;
        return $this;
    }

    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getUserRoleScopeTags(): array
    {
        return $this->userRoleScopeTags;
    }

    /**
     * @param string[] $userRoleScopeTags
     */
    public function setUserRoleScopeTags(array $userRoleScopeTags): self
    {
        $this->userRoleScopeTags = $userRoleScopeTags;
        return $this;
    }

}

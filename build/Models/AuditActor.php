<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuditActor
 */
class AuditActor
{
    /**
     * Name of the Application.
     */
    private ?string $applicationDisplayName;

    /**
     * AAD Application Id.
     */
    private ?string $applicationId;

    /**
     * Actor Type.
     */
    private ?string $auditActorType;

    /**
     * IPAddress.
     */
    private ?string $ipAddress;

    /**
     * Service Principal Name (SPN).
     */
    private ?string $servicePrincipalName;

    /**
     * User Id.
     */
    private ?string $userId;

    /**
     * List of user permissions when the audit was performed.
     * @var string[]
     */
    private array $userPermissions = [];

    /**
     * A class containing the properties for Audit Actor.
     */
    private ?string $userPrincipalName;


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

    public function getAuditActorType(): ?string
    {
        return $this->auditActorType;
    }

    public function setAuditActorType(?string $auditActorType): self
    {
        $this->auditActorType = $auditActorType;
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

}

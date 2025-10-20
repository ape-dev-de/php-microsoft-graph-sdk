<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUserAccount
 */
class SecurityUserAccount
{
    /**
     * The displayed name of the user account.
     */
    private ?string $accountName;

    /**
     * The unique user identifier assigned by the on-premises Active Directory.
     */
    private ?string $activeDirectoryObjectGuid;

    /**
     * The user object identifier in Microsoft Entra ID.
     */
    private ?string $azureAdUserId;

    /**
     * The user display name in Microsoft Entra ID.
     */
    private ?string $displayName;

    /**
     * The name of the Active Directory domain of which the user is a member.
     */
    private ?string $domainName;

    /**
     * Information on resource access attempts made by the user account.
     */
    private array $resourceAccessEvents = [];

    /**
     * The user principal name of the account in Microsoft Entra ID.
     */
    private ?string $userPrincipalName;

    /**
     * The local security identifier of the user account.
     */
    private ?string $userSid;

    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    public function getActiveDirectoryObjectGuid(): ?string
    {
        return $this->activeDirectoryObjectGuid;
    }

    public function setActiveDirectoryObjectGuid(?string $activeDirectoryObjectGuid): self
    {
        $this->activeDirectoryObjectGuid = $activeDirectoryObjectGuid;
        return $this;
    }

    public function getAzureAdUserId(): ?string
    {
        return $this->azureAdUserId;
    }

    public function setAzureAdUserId(?string $azureAdUserId): self
    {
        $this->azureAdUserId = $azureAdUserId;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getDomainName(): ?string
    {
        return $this->domainName;
    }

    public function setDomainName(?string $domainName): self
    {
        $this->domainName = $domainName;
        return $this;
    }

    public function getResourceAccessEvents(): array
    {
        return $this->resourceAccessEvents;
    }

    public function setResourceAccessEvents(array $resourceAccessEvents): self
    {
        $this->resourceAccessEvents = $resourceAccessEvents;
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

    public function getUserSid(): ?string
    {
        return $this->userSid;
    }

    public function setUserSid(?string $userSid): self
    {
        $this->userSid = $userSid;
        return $this;
    }

}

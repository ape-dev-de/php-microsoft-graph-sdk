<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSecurityState
 */
class UserSecurityState
{
    /**
     * AAD User object identifier (GUID) - represents the physical/multi-account user entity.
     */
    private ?string $aadUserId;

    /**
     * Account name of user account (without Active Directory domain or DNS domain) - (also called mailNickName).
     */
    private ?string $accountName;

    /**
     * NetBIOS/Active Directory domain of user account (that is, domain/account format).
     */
    private ?string $domainName;

    /**
     * For email-related alerts - user account''s email ''role''. Possible values are: unknown, sender, recipient.
     */
    private ?string $emailRole;

    /**
     * Indicates whether the user logged on through a VPN.
     */
    private ?bool $isVpn;

    /**
     * Time at which the sign-in occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $logonDateTime;

    /**
     * User sign-in ID.
     */
    private ?string $logonId;

    /**
     * IP Address the sign-in request originated from.
     */
    private ?string $logonIp;

    /**
     * Location (by IP address mapping) associated with a user sign-in event by this user.
     */
    private ?string $logonLocation;

    /**
     * Method of user sign in. Possible values are: unknown, interactive, remoteInteractive, network, batch, service.
     */
    private ?string $logonType;

    /**
     * Active Directory (on-premises) Security Identifier (SID) of the user.
     */
    private ?string $onPremisesSecurityIdentifier;

    /**
     * Provider-generated/calculated risk score of the user account. Recommended value range of 0-1, which equates to a percentage.
     */
    private ?string $riskScore;

    /**
     * User account type (group membership), per Windows definition. Possible values are: unknown, standard, power, administrator.
     */
    private ?string $userAccountType;

    /**
     * User sign-in name - internet format: (user account name)@(user account DNS domain name).
     */
    private ?string $userPrincipalName;


    public function getAadUserId(): ?string
    {
        return $this->aadUserId;
    }

    public function setAadUserId(?string $aadUserId): self
    {
        $this->aadUserId = $aadUserId;
        return $this;
    }

    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
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

    public function getEmailRole(): ?string
    {
        return $this->emailRole;
    }

    public function setEmailRole(?string $emailRole): self
    {
        $this->emailRole = $emailRole;
        return $this;
    }

    public function getIsVpn(): ?bool
    {
        return $this->isVpn;
    }

    public function setIsVpn(?bool $isVpn): self
    {
        $this->isVpn = $isVpn;
        return $this;
    }

    public function getLogonDateTime(): ?\DateTimeInterface
    {
        return $this->logonDateTime;
    }

    public function setLogonDateTime(?\DateTimeInterface $logonDateTime): self
    {
        $this->logonDateTime = $logonDateTime;
        return $this;
    }

    public function getLogonId(): ?string
    {
        return $this->logonId;
    }

    public function setLogonId(?string $logonId): self
    {
        $this->logonId = $logonId;
        return $this;
    }

    public function getLogonIp(): ?string
    {
        return $this->logonIp;
    }

    public function setLogonIp(?string $logonIp): self
    {
        $this->logonIp = $logonIp;
        return $this;
    }

    public function getLogonLocation(): ?string
    {
        return $this->logonLocation;
    }

    public function setLogonLocation(?string $logonLocation): self
    {
        $this->logonLocation = $logonLocation;
        return $this;
    }

    public function getLogonType(): ?string
    {
        return $this->logonType;
    }

    public function setLogonType(?string $logonType): self
    {
        $this->logonType = $logonType;
        return $this;
    }

    public function getOnPremisesSecurityIdentifier(): ?string
    {
        return $this->onPremisesSecurityIdentifier;
    }

    public function setOnPremisesSecurityIdentifier(?string $onPremisesSecurityIdentifier): self
    {
        $this->onPremisesSecurityIdentifier = $onPremisesSecurityIdentifier;
        return $this;
    }

    public function getRiskScore(): ?string
    {
        return $this->riskScore;
    }

    public function setRiskScore(?string $riskScore): self
    {
        $this->riskScore = $riskScore;
        return $this;
    }

    public function getUserAccountType(): ?string
    {
        return $this->userAccountType;
    }

    public function setUserAccountType(?string $userAccountType): self
    {
        $this->userAccountType = $userAccountType;
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

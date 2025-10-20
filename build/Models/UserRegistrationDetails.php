<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationDetails
 */
class UserRegistrationDetails
{
    /**
     * Indicates whether the user has an admin role in the tenant. This value can be used to check the authentication methods that privileged accounts are registered for and capable of.
     */
    private ?bool $isAdmin;

    /**
     * Indicates whether the user has registered a strong authentication method for multifactor authentication. The method must be allowed by the authentication methods policy. Supports $filter (eq).
     */
    private ?bool $isMfaCapable;

    /**
     * Indicates whether the user has registered a strong authentication method for multifactor authentication. The method may not necessarily be allowed by the authentication methods policy. Supports $filter (eq).
     */
    private ?bool $isMfaRegistered;

    /**
     * Indicates whether the user has registered a passwordless strong authentication method (including FIDO2, Windows Hello for Business, and Microsoft Authenticator (Passwordless)) that is allowed by the authentication methods policy. Supports $filter (eq).
     */
    private ?bool $isPasswordlessCapable;

    /**
     * Indicates whether the user has registered the required number of authentication methods for self-service password reset and the user is allowed to perform self-service password reset by policy. Supports $filter (eq).
     */
    private ?bool $isSsprCapable;

    /**
     * Indicates whether the user is allowed to perform self-service password reset by policy. The user may not necessarily have registered the required number of authentication methods for self-service password reset. Supports $filter (eq).
     */
    private ?bool $isSsprEnabled;

    /**
     * Indicates whether the user has registered the required number of authentication methods for self-service password reset. The user may not necessarily be allowed to perform self-service password reset by policy. Supports $filter (eq).
     */
    private ?bool $isSsprRegistered;

    /**
     * Indicates whether system preferred authentication method is enabled. If enabled, the system dynamically determines the most secure authentication method among the methods registered by the user. Supports $filter (eq).
     */
    private ?bool $isSystemPreferredAuthenticationMethodEnabled;

    /**
     * The date and time (UTC) when the report was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;

    /**
     * Collection of authentication methods registered, such as mobilePhone, email, passKeyDeviceBound. Supports $filter (any with eq).
     */
    private ?string $methodsRegistered;

    /**
     * Collection of authentication methods that the system determined to be the most secure authentication methods among the registered methods for second factor authentication. Possible values are: push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, none, unknownFutureValue. Supports $filter (any with eq).
     */
    private ?string $systemPreferredAuthenticationMethods;

    /**
     * The user display name, such as Adele Vance. Supports $filter (eq, startsWith) and $orderby.
     */
    private ?string $userDisplayName;

    /**
     * The method the user selected as the default second-factor for performing multifactor authentication. Possible values are: push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, none, unknownFutureValue. This property is used as preferred MFA method when isSystemPreferredAuthenticationMethodEnabled is false. Supports $filter (any with eq).
     */
    private ?string $userPreferredMethodForSecondaryAuthentication;

    /**
     * The user principal name, such as AdeleV@contoso.com. Supports $filter (eq, startsWith) and $orderby.
     */
    private ?string $userPrincipalName;

    /**
     * Identifies whether the user is a member or guest in the tenant. The possible values are: member, guest, unknownFutureValue.
     */
    private ?string $userType;

    public function getIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(?bool $isAdmin): self
    {
        $this->isAdmin = $isAdmin;
        return $this;
    }

    public function getIsMfaCapable(): ?bool
    {
        return $this->isMfaCapable;
    }

    public function setIsMfaCapable(?bool $isMfaCapable): self
    {
        $this->isMfaCapable = $isMfaCapable;
        return $this;
    }

    public function getIsMfaRegistered(): ?bool
    {
        return $this->isMfaRegistered;
    }

    public function setIsMfaRegistered(?bool $isMfaRegistered): self
    {
        $this->isMfaRegistered = $isMfaRegistered;
        return $this;
    }

    public function getIsPasswordlessCapable(): ?bool
    {
        return $this->isPasswordlessCapable;
    }

    public function setIsPasswordlessCapable(?bool $isPasswordlessCapable): self
    {
        $this->isPasswordlessCapable = $isPasswordlessCapable;
        return $this;
    }

    public function getIsSsprCapable(): ?bool
    {
        return $this->isSsprCapable;
    }

    public function setIsSsprCapable(?bool $isSsprCapable): self
    {
        $this->isSsprCapable = $isSsprCapable;
        return $this;
    }

    public function getIsSsprEnabled(): ?bool
    {
        return $this->isSsprEnabled;
    }

    public function setIsSsprEnabled(?bool $isSsprEnabled): self
    {
        $this->isSsprEnabled = $isSsprEnabled;
        return $this;
    }

    public function getIsSsprRegistered(): ?bool
    {
        return $this->isSsprRegistered;
    }

    public function setIsSsprRegistered(?bool $isSsprRegistered): self
    {
        $this->isSsprRegistered = $isSsprRegistered;
        return $this;
    }

    public function getIsSystemPreferredAuthenticationMethodEnabled(): ?bool
    {
        return $this->isSystemPreferredAuthenticationMethodEnabled;
    }

    public function setIsSystemPreferredAuthenticationMethodEnabled(?bool $isSystemPreferredAuthenticationMethodEnabled): self
    {
        $this->isSystemPreferredAuthenticationMethodEnabled = $isSystemPreferredAuthenticationMethodEnabled;
        return $this;
    }

    public function getLastUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdatedDateTime;
    }

    public function setLastUpdatedDateTime(?\DateTimeInterface $lastUpdatedDateTime): self
    {
        $this->lastUpdatedDateTime = $lastUpdatedDateTime;
        return $this;
    }

    public function getMethodsRegistered(): ?string
    {
        return $this->methodsRegistered;
    }

    public function setMethodsRegistered(?string $methodsRegistered): self
    {
        $this->methodsRegistered = $methodsRegistered;
        return $this;
    }

    public function getSystemPreferredAuthenticationMethods(): ?string
    {
        return $this->systemPreferredAuthenticationMethods;
    }

    public function setSystemPreferredAuthenticationMethods(?string $systemPreferredAuthenticationMethods): self
    {
        $this->systemPreferredAuthenticationMethods = $systemPreferredAuthenticationMethods;
        return $this;
    }

    public function getUserDisplayName(): ?string
    {
        return $this->userDisplayName;
    }

    public function setUserDisplayName(?string $userDisplayName): self
    {
        $this->userDisplayName = $userDisplayName;
        return $this;
    }

    public function getUserPreferredMethodForSecondaryAuthentication(): ?string
    {
        return $this->userPreferredMethodForSecondaryAuthentication;
    }

    public function setUserPreferredMethodForSecondaryAuthentication(?string $userPreferredMethodForSecondaryAuthentication): self
    {
        $this->userPreferredMethodForSecondaryAuthentication = $userPreferredMethodForSecondaryAuthentication;
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

    public function getUserType(): ?string
    {
        return $this->userType;
    }

    public function setUserType(?string $userType): self
    {
        $this->userType = $userType;
        return $this;
    }

}

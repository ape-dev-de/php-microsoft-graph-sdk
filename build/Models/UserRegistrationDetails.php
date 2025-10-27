<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationDetails
 */
class UserRegistrationDetails
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether the user has an admin role in the tenant. This value can be used to check the authentication methods that privileged accounts are registered for and capable of. */
    public ?bool $isAdmin = null;

    /** Indicates whether the user has registered a strong authentication method for multifactor authentication. The method must be allowed by the authentication methods policy. Supports $filter (eq). */
    public ?bool $isMfaCapable = null;

    /** Indicates whether the user has registered a strong authentication method for multifactor authentication. The method may not necessarily be allowed by the authentication methods policy. Supports $filter (eq). */
    public ?bool $isMfaRegistered = null;

    /** Indicates whether the user has registered a passwordless strong authentication method (including FIDO2, Windows Hello for Business, and Microsoft Authenticator (Passwordless)) that is allowed by the authentication methods policy. Supports $filter (eq). */
    public ?bool $isPasswordlessCapable = null;

    /** Indicates whether the user has registered the required number of authentication methods for self-service password reset and the user is allowed to perform self-service password reset by policy. Supports $filter (eq). */
    public ?bool $isSsprCapable = null;

    /** Indicates whether the user is allowed to perform self-service password reset by policy. The user may not necessarily have registered the required number of authentication methods for self-service password reset. Supports $filter (eq). */
    public ?bool $isSsprEnabled = null;

    /** Indicates whether the user has registered the required number of authentication methods for self-service password reset. The user may not necessarily be allowed to perform self-service password reset by policy. Supports $filter (eq). */
    public ?bool $isSsprRegistered = null;

    /** Indicates whether system preferred authentication method is enabled. If enabled, the system dynamically determines the most secure authentication method among the methods registered by the user. Supports $filter (eq). */
    public ?bool $isSystemPreferredAuthenticationMethodEnabled = null;

    /** The date and time (UTC) when the report was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /** 
     * Collection of authentication methods registered, such as mobilePhone, email, passKeyDeviceBound. Supports $filter (any with eq).
     * @var string[]
     */
    public array $methodsRegistered = [];

    /** 
     * Collection of authentication methods that the system determined to be the most secure authentication methods among the registered methods for second factor authentication. Possible values are: push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, none, unknownFutureValue. Supports $filter (any with eq).
     * @var string[]
     */
    public array $systemPreferredAuthenticationMethods = [];

    /** The user display name, such as Adele Vance. Supports $filter (eq, startsWith) and $orderby. */
    public ?string $userDisplayName = null;

    /** 
     * The method the user selected as the default second-factor for performing multifactor authentication. Possible values are: push, oath, voiceMobile, voiceAlternateMobile, voiceOffice, sms, none, unknownFutureValue. This property is used as preferred MFA method when isSystemPreferredAuthenticationMethodEnabled is false. Supports $filter (any with eq).
     * @var UserDefaultAuthenticationMethod|\stdClass|null
     */
    public mixed $userPreferredMethodForSecondaryAuthentication = null;

    /** The user principal name, such as AdeleV@contoso.com. Supports $filter (eq, startsWith) and $orderby. */
    public ?string $userPrincipalName = null;

    /** 
     * Identifies whether the user is a member or guest in the tenant. The possible values are: member, guest, unknownFutureValue.
     * @var SignInUserType|\stdClass|null
     */
    public mixed $userType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isAdmin'])) {
            $this->isAdmin = $data['isAdmin'];
        }
        if (isset($data['isMfaCapable'])) {
            $this->isMfaCapable = $data['isMfaCapable'];
        }
        if (isset($data['isMfaRegistered'])) {
            $this->isMfaRegistered = $data['isMfaRegistered'];
        }
        if (isset($data['isPasswordlessCapable'])) {
            $this->isPasswordlessCapable = $data['isPasswordlessCapable'];
        }
        if (isset($data['isSsprCapable'])) {
            $this->isSsprCapable = $data['isSsprCapable'];
        }
        if (isset($data['isSsprEnabled'])) {
            $this->isSsprEnabled = $data['isSsprEnabled'];
        }
        if (isset($data['isSsprRegistered'])) {
            $this->isSsprRegistered = $data['isSsprRegistered'];
        }
        if (isset($data['isSystemPreferredAuthenticationMethodEnabled'])) {
            $this->isSystemPreferredAuthenticationMethodEnabled = $data['isSystemPreferredAuthenticationMethodEnabled'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = is_string($data['lastUpdatedDateTime']) ? new \DateTimeImmutable($data['lastUpdatedDateTime']) : $data['lastUpdatedDateTime'];
        }
        if (isset($data['methodsRegistered'])) {
            $this->methodsRegistered = $data['methodsRegistered'];
        }
        if (isset($data['systemPreferredAuthenticationMethods'])) {
            $this->systemPreferredAuthenticationMethods = $data['systemPreferredAuthenticationMethods'];
        }
        if (isset($data['userDisplayName'])) {
            $this->userDisplayName = $data['userDisplayName'];
        }
        if (isset($data['userPreferredMethodForSecondaryAuthentication'])) {
            $this->userPreferredMethodForSecondaryAuthentication = is_array($data['userPreferredMethodForSecondaryAuthentication']) ? new UserDefaultAuthenticationMethod($data['userPreferredMethodForSecondaryAuthentication']) : $data['userPreferredMethodForSecondaryAuthentication'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
        if (isset($data['userType'])) {
            $this->userType = is_array($data['userType']) ? new SignInUserType($data['userType']) : $data['userType'];
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

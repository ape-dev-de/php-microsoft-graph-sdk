<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSecurityState
 */
class UserSecurityState
{
    public function __construct(
        /** AAD User object identifier (GUID) - represents the physical/multi-account user entity. */
        public ?string $aadUserId = null,
        /** Account name of user account (without Active Directory domain or DNS domain) - (also called mailNickName). */
        public ?string $accountName = null,
        /** NetBIOS/Active Directory domain of user account (that is, domain/account format). */
        public ?string $domainName = null,
        /** For email-related alerts - user account''s email ''role''. Possible values are: unknown, sender, recipient. */
        public ?string $emailRole = null,
        /** Indicates whether the user logged on through a VPN. */
        public ?bool $isVpn = null,
        /** Time at which the sign-in occurred. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $logonDateTime = null,
        /** User sign-in ID. */
        public ?string $logonId = null,
        /** IP Address the sign-in request originated from. */
        public ?string $logonIp = null,
        /** Location (by IP address mapping) associated with a user sign-in event by this user. */
        public ?string $logonLocation = null,
        /** Method of user sign in. Possible values are: unknown, interactive, remoteInteractive, network, batch, service. */
        public ?string $logonType = null,
        /** Active Directory (on-premises) Security Identifier (SID) of the user. */
        public ?string $onPremisesSecurityIdentifier = null,
        /** Provider-generated/calculated risk score of the user account. Recommended value range of 0-1, which equates to a percentage. */
        public ?string $riskScore = null,
        /** User account type (group membership), per Windows definition. Possible values are: unknown, standard, power, administrator. */
        public ?string $userAccountType = null,
        /** User sign-in name - internet format: (user account name)@(user account DNS domain name). */
        public ?string $userPrincipalName = null
    ) {}
}

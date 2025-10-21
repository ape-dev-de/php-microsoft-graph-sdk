<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUserAccount
 */
class SecurityUserAccount
{
    public function __construct(
        /** The displayed name of the user account. */
        public ?string $accountName = null,
        /** The unique user identifier assigned by the on-premises Active Directory. */
        public ?string $activeDirectoryObjectGuid = null,
        /** The user object identifier in Microsoft Entra ID. */
        public ?string $azureAdUserId = null,
        /** The user display name in Microsoft Entra ID. */
        public ?string $displayName = null,
        /** The name of the Active Directory domain of which the user is a member. */
        public ?string $domainName = null,
        /** Information on resource access attempts made by the user account. */
        public array $resourceAccessEvents = [],
        /** The user principal name of the account in Microsoft Entra ID. */
        public ?string $userPrincipalName = null,
        /** The local security identifier of the user account. */
        public ?string $userSid = null
    ) {}
}

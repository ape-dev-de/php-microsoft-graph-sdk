<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthorizationPolicy
 */
class AuthorizationPolicy
{
    public function __construct(
        /** Indicates whether users can sign up for email based subscriptions. */
        public ?bool $allowedToSignUpEmailBasedSubscriptions = null,
        /** Indicates whether administrators of the tenant can use the Self-Service Password Reset (SSPR). For more information, see Self-service password reset for administrators. */
        public ?bool $allowedToUseSSPR = null,
        /** Indicates whether a user can join the tenant by email validation. */
        public ?bool $allowEmailVerifiedUsersToJoinOrganization = null,
        /** Indicates who can invite guests to the organization. Possible values are: none, adminsAndGuestInviters, adminsGuestInvitersAndAllMembers, everyone.  everyone is the default setting for all cloud environments except US Government. For more information, see allowInvitesFrom values. */
        public ?string $allowInvitesFrom = null,
        /** Indicates whether user consent for risky apps is allowed. We recommend keeping allowUserConsentForRiskyApps as false. Default value is false. */
        public ?bool $allowUserConsentForRiskyApps = null,
        /** To disable the use of MSOL PowerShell, set this property to true. This also disables user-based access to the legacy service endpoint used by MSOL PowerShell. This doesn''t affect Microsoft Entra Connect or Microsoft Graph. */
        public ?bool $blockMsolPowerShell = null,
        /**  */
        public ?string $defaultUserRolePermissions = null,
        /** Represents role templateId for the role that should be granted to guests. Currently following roles are supported:  User (a0b1b346-4d3e-4e8b-98f8-753987be4970), Guest User (10dae51f-b6af-4016-8d66-8c2a99b929b3), and Restricted Guest User (2af84b1e-32c8-42b7-82bc-daa82404023b). */
        public ?string $guestUserRoleId = null
    ) {}
}

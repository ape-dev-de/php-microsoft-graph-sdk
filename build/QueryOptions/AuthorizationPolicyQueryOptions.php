<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthorizationPolicy resources
 *
 * Available select fields:
 * - allowedToSignUpEmailBasedSubscriptions
 * - allowedToUseSSPR
 * - allowEmailVerifiedUsersToJoinOrganization
 * - allowInvitesFrom
 * - allowUserConsentForRiskyApps
 * - blockMsolPowerShell
 * - defaultUserRolePermissions
 * - guestUserRoleId
 */
class AuthorizationPolicyQueryOptions extends QueryOptions
{
    public const FIELD_ALLOWED_TO_SIGN_UP_EMAIL_BASED_SUBSCRIPTIONS = 'allowedToSignUpEmailBasedSubscriptions';
    public const FIELD_ALLOWED_TO_USE_SSPR = 'allowedToUseSSPR';
    public const FIELD_ALLOW_EMAIL_VERIFIED_USERS_TO_JOIN_ORGANIZATION = 'allowEmailVerifiedUsersToJoinOrganization';
    public const FIELD_ALLOW_INVITES_FROM = 'allowInvitesFrom';
    public const FIELD_ALLOW_USER_CONSENT_FOR_RISKY_APPS = 'allowUserConsentForRiskyApps';
    public const FIELD_BLOCK_MSOL_POWER_SHELL = 'blockMsolPowerShell';
    public const FIELD_DEFAULT_USER_ROLE_PERMISSIONS = 'defaultUserRolePermissions';
    public const FIELD_GUEST_USER_ROLE_ID = 'guestUserRoleId';

    /**
     * Select specific AuthorizationPolicy properties
     * 
     * @param array<string> $select Use AuthorizationPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

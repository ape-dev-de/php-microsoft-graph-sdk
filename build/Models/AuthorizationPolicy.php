<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthorizationPolicy
 */
class AuthorizationPolicy
{
    /**
     * Indicates whether users can sign up for email based subscriptions.
     */
    private ?bool $allowedToSignUpEmailBasedSubscriptions;

    /**
     * Indicates whether administrators of the tenant can use the Self-Service Password Reset (SSPR). For more information, see Self-service password reset for administrators.
     */
    private ?bool $allowedToUseSSPR;

    /**
     * Indicates whether a user can join the tenant by email validation.
     */
    private ?bool $allowEmailVerifiedUsersToJoinOrganization;

    /**
     * Indicates who can invite guests to the organization. Possible values are: none, adminsAndGuestInviters, adminsGuestInvitersAndAllMembers, everyone.  everyone is the default setting for all cloud environments except US Government. For more information, see allowInvitesFrom values.
     */
    private ?string $allowInvitesFrom;

    /**
     * Indicates whether user consent for risky apps is allowed. We recommend keeping allowUserConsentForRiskyApps as false. Default value is false.
     */
    private ?bool $allowUserConsentForRiskyApps;

    /**
     * To disable the use of MSOL PowerShell, set this property to true. This also disables user-based access to the legacy service endpoint used by MSOL PowerShell. This doesn''t affect Microsoft Entra Connect or Microsoft Graph.
     */
    private ?bool $blockMsolPowerShell;

    /**
     */
    private ?string $defaultUserRolePermissions;

    /**
     * Represents role templateId for the role that should be granted to guests. Currently following roles are supported:  User (a0b1b346-4d3e-4e8b-98f8-753987be4970), Guest User (10dae51f-b6af-4016-8d66-8c2a99b929b3), and Restricted Guest User (2af84b1e-32c8-42b7-82bc-daa82404023b).
     */
    private ?string $guestUserRoleId;


    public function getAllowedToSignUpEmailBasedSubscriptions(): ?bool
    {
        return $this->allowedToSignUpEmailBasedSubscriptions;
    }

    public function setAllowedToSignUpEmailBasedSubscriptions(?bool $allowedToSignUpEmailBasedSubscriptions): self
    {
        $this->allowedToSignUpEmailBasedSubscriptions = $allowedToSignUpEmailBasedSubscriptions;
        return $this;
    }

    public function getAllowedToUseSSPR(): ?bool
    {
        return $this->allowedToUseSSPR;
    }

    public function setAllowedToUseSSPR(?bool $allowedToUseSSPR): self
    {
        $this->allowedToUseSSPR = $allowedToUseSSPR;
        return $this;
    }

    public function getAllowEmailVerifiedUsersToJoinOrganization(): ?bool
    {
        return $this->allowEmailVerifiedUsersToJoinOrganization;
    }

    public function setAllowEmailVerifiedUsersToJoinOrganization(?bool $allowEmailVerifiedUsersToJoinOrganization): self
    {
        $this->allowEmailVerifiedUsersToJoinOrganization = $allowEmailVerifiedUsersToJoinOrganization;
        return $this;
    }

    public function getAllowInvitesFrom(): ?string
    {
        return $this->allowInvitesFrom;
    }

    public function setAllowInvitesFrom(?string $allowInvitesFrom): self
    {
        $this->allowInvitesFrom = $allowInvitesFrom;
        return $this;
    }

    public function getAllowUserConsentForRiskyApps(): ?bool
    {
        return $this->allowUserConsentForRiskyApps;
    }

    public function setAllowUserConsentForRiskyApps(?bool $allowUserConsentForRiskyApps): self
    {
        $this->allowUserConsentForRiskyApps = $allowUserConsentForRiskyApps;
        return $this;
    }

    public function getBlockMsolPowerShell(): ?bool
    {
        return $this->blockMsolPowerShell;
    }

    public function setBlockMsolPowerShell(?bool $blockMsolPowerShell): self
    {
        $this->blockMsolPowerShell = $blockMsolPowerShell;
        return $this;
    }

    public function getDefaultUserRolePermissions(): ?string
    {
        return $this->defaultUserRolePermissions;
    }

    public function setDefaultUserRolePermissions(?string $defaultUserRolePermissions): self
    {
        $this->defaultUserRolePermissions = $defaultUserRolePermissions;
        return $this;
    }

    public function getGuestUserRoleId(): ?string
    {
        return $this->guestUserRoleId;
    }

    public function setGuestUserRoleId(?string $guestUserRoleId): self
    {
        $this->guestUserRoleId = $guestUserRoleId;
        return $this;
    }

}

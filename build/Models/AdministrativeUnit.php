<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AdministrativeUnit
 */
class AdministrativeUnit
{
    /**
     * An optional description for the administrative unit. Supports $filter (eq, ne, in, startsWith), $search.
     */
    private ?string $description;

    /**
     * Display name for the administrative unit. Maximum length is 256 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
     */
    private ?string $displayName;

    /**
     * true if members of this administrative unit should be treated as sensitive, which requires specific permissions to manage. If not set, the default value is null and the default behavior is false. Use this property to define administrative units with roles that don''t inherit from tenant-level administrators, and where the management of individual member objects is limited to administrators scoped to a restricted management administrative unit. This property is immutable and can''t be changed later.  For more information on how to work with restricted management administrative units, see Restricted management administrative units in Microsoft Entra ID.
     */
    private ?bool $isMemberManagementRestricted;

    /**
     * The dynamic membership rule for the administrative unit. For more information about the rules you can use for dynamic administrative units and dynamic groups, see Manage rules for dynamic membership groups in Microsoft Entra ID.
     */
    private ?string $membershipRule;

    /**
     * Controls whether the dynamic membership rule is actively processed. Set to On to activate the dynamic membership rule, or Paused to stop updating membership dynamically.
     */
    private ?string $membershipRuleProcessingState;

    /**
     * Indicates the membership type for the administrative unit. The possible values are: dynamic, assigned. If not set, the default value is null and the default behavior is assigned.
     */
    private ?string $membershipType;

    /**
     * Controls whether the administrative unit and its members are hidden or public. Can be set to HiddenMembership. If not set, the default value is null and the default behavior is public. When set to HiddenMembership, only members of the administrative unit can list other members of the administrative unit.
     */
    private ?string $visibility;

    /**
     * The collection of open extensions defined for this administrative unit. Nullable.
     */
    private array $extensions = [];

    /**
     * Users and groups that are members of this administrative unit. Supports $expand.
     */
    private array $members = [];

    /**
     * Scoped-role members of this administrative unit.
     */
    private ?string $scopedRoleMembers;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getIsMemberManagementRestricted(): ?bool
    {
        return $this->isMemberManagementRestricted;
    }

    public function setIsMemberManagementRestricted(?bool $isMemberManagementRestricted): self
    {
        $this->isMemberManagementRestricted = $isMemberManagementRestricted;
        return $this;
    }

    public function getMembershipRule(): ?string
    {
        return $this->membershipRule;
    }

    public function setMembershipRule(?string $membershipRule): self
    {
        $this->membershipRule = $membershipRule;
        return $this;
    }

    public function getMembershipRuleProcessingState(): ?string
    {
        return $this->membershipRuleProcessingState;
    }

    public function setMembershipRuleProcessingState(?string $membershipRuleProcessingState): self
    {
        $this->membershipRuleProcessingState = $membershipRuleProcessingState;
        return $this;
    }

    public function getMembershipType(): ?string
    {
        return $this->membershipType;
    }

    public function setMembershipType(?string $membershipType): self
    {
        $this->membershipType = $membershipType;
        return $this;
    }

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(?string $visibility): self
    {
        $this->visibility = $visibility;
        return $this;
    }

    public function getExtensions(): array
    {
        return $this->extensions;
    }

    public function setExtensions(array $extensions): self
    {
        $this->extensions = $extensions;
        return $this;
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function setMembers(array $members): self
    {
        $this->members = $members;
        return $this;
    }

    public function getScopedRoleMembers(): ?string
    {
        return $this->scopedRoleMembers;
    }

    public function setScopedRoleMembers(?string $scopedRoleMembers): self
    {
        $this->scopedRoleMembers = $scopedRoleMembers;
        return $this;
    }

}

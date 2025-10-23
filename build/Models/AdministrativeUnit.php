<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AdministrativeUnit
 */
class AdministrativeUnit
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** An optional description for the administrative unit. Supports $filter (eq, ne, in, startsWith), $search. */
    public ?string $description = null;

    /** Display name for the administrative unit. Maximum length is 256 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby. */
    public ?string $displayName = null;

    /** true if members of this administrative unit should be treated as sensitive, which requires specific permissions to manage. If not set, the default value is null and the default behavior is false. Use this property to define administrative units with roles that don't inherit from tenant-level administrators, and where the management of individual member objects is limited to administrators scoped to a restricted management administrative unit. This property is immutable and can't be changed later.  For more information on how to work with restricted management administrative units, see Restricted management administrative units in Microsoft Entra ID. */
    public ?bool $isMemberManagementRestricted = null;

    /** The dynamic membership rule for the administrative unit. For more information about the rules you can use for dynamic administrative units and dynamic groups, see Manage rules for dynamic membership groups in Microsoft Entra ID. */
    public ?string $membershipRule = null;

    /** Controls whether the dynamic membership rule is actively processed. Set to On to activate the dynamic membership rule, or Paused to stop updating membership dynamically. */
    public ?string $membershipRuleProcessingState = null;

    /** Indicates the membership type for the administrative unit. The possible values are: dynamic, assigned. If not set, the default value is null and the default behavior is assigned. */
    public ?string $membershipType = null;

    /** Controls whether the administrative unit and its members are hidden or public. Can be set to HiddenMembership. If not set, the default value is null and the default behavior is public. When set to HiddenMembership, only members of the administrative unit can list other members of the administrative unit. */
    public ?string $visibility = null;

    /** 
     * The collection of open extensions defined for this administrative unit. Nullable.
     * @var Extension[]
     */
    public array $extensions = [];

    /** 
     * Users and groups that are members of this administrative unit. Supports $expand.
     * @var DirectoryObject[]
     */
    public array $members = [];

    /** 
     * Scoped-role members of this administrative unit.
     * @var ScopedRoleMembership[]
     */
    public array $scopedRoleMembers = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = $data['deletedDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isMemberManagementRestricted'])) {
            $this->isMemberManagementRestricted = $data['isMemberManagementRestricted'];
        }
        if (isset($data['membershipRule'])) {
            $this->membershipRule = $data['membershipRule'];
        }
        if (isset($data['membershipRuleProcessingState'])) {
            $this->membershipRuleProcessingState = $data['membershipRuleProcessingState'];
        }
        if (isset($data['membershipType'])) {
            $this->membershipType = $data['membershipType'];
        }
        if (isset($data['visibility'])) {
            $this->visibility = $data['visibility'];
        }
        if (isset($data['extensions'])) {
            $this->extensions = $data['extensions'];
        }
        if (isset($data['members'])) {
            $this->members = $data['members'];
        }
        if (isset($data['scopedRoleMembers'])) {
            $this->scopedRoleMembers = $data['scopedRoleMembers'];
        }
    }
}

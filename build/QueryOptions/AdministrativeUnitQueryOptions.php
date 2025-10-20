<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AdministrativeUnit resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - isMemberManagementRestricted
 * - membershipRule
 * - membershipRuleProcessingState
 * - membershipType
 * - visibility
 * - extensions
 * - members
 * - scopedRoleMembers
 */
class AdministrativeUnitQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_MEMBER_MANAGEMENT_RESTRICTED = 'isMemberManagementRestricted';
    public const FIELD_MEMBERSHIP_RULE = 'membershipRule';
    public const FIELD_MEMBERSHIP_RULE_PROCESSING_STATE = 'membershipRuleProcessingState';
    public const FIELD_MEMBERSHIP_TYPE = 'membershipType';
    public const FIELD_VISIBILITY = 'visibility';
    public const FIELD_EXTENSIONS = 'extensions';
    public const FIELD_MEMBERS = 'members';
    public const FIELD_SCOPED_ROLE_MEMBERS = 'scopedRoleMembers';

    /**
     * Select specific AdministrativeUnit properties
     * 
     * @param array<string> $select Use AdministrativeUnitQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

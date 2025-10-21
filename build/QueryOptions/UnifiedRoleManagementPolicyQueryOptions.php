<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicy resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - isOrganizationDefault
 * - lastModifiedBy
 * - lastModifiedDateTime
 * - scopeId
 * - scopeType
 * - effectiveRules
 * - rules
 */
class UnifiedRoleManagementPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleManagementPolicy
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_ORGANIZATION_DEFAULT = 'isOrganizationDefault';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_SCOPE_ID = 'scopeId';
    public const FIELD_SCOPE_TYPE = 'scopeType';
    public const FIELD_EFFECTIVE_RULES = 'effectiveRules';
    public const FIELD_RULES = 'rules';

    /**
     * Select specific UnifiedRoleManagementPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

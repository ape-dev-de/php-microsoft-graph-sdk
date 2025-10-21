<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleManagementPolicyRuleTarget resources
 *
 * Available select fields:
 * - caller
 * - enforcedSettings
 * - inheritableSettings
 * - level
 * - operations
 * - targetObjects
 */
class UnifiedRoleManagementPolicyRuleTargetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UnifiedRoleManagementPolicyRuleTarget
     */
    public const FIELD_CALLER = 'caller';
    public const FIELD_ENFORCED_SETTINGS = 'enforcedSettings';
    public const FIELD_INHERITABLE_SETTINGS = 'inheritableSettings';
    public const FIELD_LEVEL = 'level';
    public const FIELD_OPERATIONS = 'operations';
    public const FIELD_TARGET_OBJECTS = 'targetObjects';

    /**
     * Select specific UnifiedRoleManagementPolicyRuleTarget properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

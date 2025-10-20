<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityUserFlowAttributeAssignment resources
 *
 * Available select fields:
 * - displayName
 * - isOptional
 * - requiresVerification
 * - userAttributeValues
 * - userInputType
 * - userAttribute
 */
class IdentityUserFlowAttributeAssignmentQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_OPTIONAL = 'isOptional';
    public const FIELD_REQUIRES_VERIFICATION = 'requiresVerification';
    public const FIELD_USER_ATTRIBUTE_VALUES = 'userAttributeValues';
    public const FIELD_USER_INPUT_TYPE = 'userInputType';
    public const FIELD_USER_ATTRIBUTE = 'userAttribute';

    /**
     * Select specific IdentityUserFlowAttributeAssignment properties
     * 
     * @param array<string> $select Use IdentityUserFlowAttributeAssignmentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

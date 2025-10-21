<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthenticationStrengthPolicy resources
 *
 * Available select fields:
 * - allowedCombinations
 * - createdDateTime
 * - description
 * - displayName
 * - modifiedDateTime
 * - policyType
 * - requirementsSatisfied
 * - combinationConfigurations
 */
class AuthenticationStrengthPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthenticationStrengthPolicy
     */
    public const FIELD_ALLOWED_COMBINATIONS = 'allowedCombinations';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_MODIFIED_DATE_TIME = 'modifiedDateTime';
    public const FIELD_POLICY_TYPE = 'policyType';
    public const FIELD_REQUIREMENTS_SATISFIED = 'requirementsSatisfied';
    public const FIELD_COMBINATION_CONFIGURATIONS = 'combinationConfigurations';

    /**
     * Select specific AuthenticationStrengthPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

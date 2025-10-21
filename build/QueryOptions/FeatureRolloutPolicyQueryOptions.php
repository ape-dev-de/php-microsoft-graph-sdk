<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FeatureRolloutPolicy resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - feature
 * - isAppliedToOrganization
 * - isEnabled
 * - appliesTo
 */
class FeatureRolloutPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FeatureRolloutPolicy
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_FEATURE = 'feature';
    public const FIELD_IS_APPLIED_TO_ORGANIZATION = 'isAppliedToOrganization';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_APPLIES_TO = 'appliesTo';

    /**
     * Select specific FeatureRolloutPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

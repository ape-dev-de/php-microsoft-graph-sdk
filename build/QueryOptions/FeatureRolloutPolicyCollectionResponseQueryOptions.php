<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FeatureRolloutPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class FeatureRolloutPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific FeatureRolloutPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use FeatureRolloutPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

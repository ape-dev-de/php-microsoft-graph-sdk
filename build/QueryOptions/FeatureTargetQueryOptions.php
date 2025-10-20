<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FeatureTarget resources
 *
 * Available select fields:
 * - id
 * - targetType
 */
class FeatureTargetQueryOptions extends QueryOptions
{
    public const FIELD_ID = 'id';
    public const FIELD_TARGET_TYPE = 'targetType';

    /**
     * Select specific FeatureTarget properties
     * 
     * @param array<string> $select Use FeatureTargetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

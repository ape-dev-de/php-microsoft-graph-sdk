<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDeviceScoresCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsDeviceScoresCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsDeviceScoresCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsDeviceScoresCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

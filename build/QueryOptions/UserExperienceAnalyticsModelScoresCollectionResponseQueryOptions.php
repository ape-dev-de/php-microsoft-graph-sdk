<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsModelScoresCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserExperienceAnalyticsModelScoresCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserExperienceAnalyticsModelScoresCollectionResponse properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsModelScoresCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

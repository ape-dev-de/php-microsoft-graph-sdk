<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsInsightValue resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsInsightValueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsInsightValue
     */

    /**
     * Select specific UserExperienceAnalyticsInsightValue properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

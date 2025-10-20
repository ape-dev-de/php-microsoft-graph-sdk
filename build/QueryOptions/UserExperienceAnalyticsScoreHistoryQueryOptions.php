<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsScoreHistory resources
 *
 * Available select fields:
 * - startupDateTime
 */
class UserExperienceAnalyticsScoreHistoryQueryOptions extends QueryOptions
{
    public const FIELD_STARTUP_DATE_TIME = 'startupDateTime';

    /**
     * Select specific UserExperienceAnalyticsScoreHistory properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsScoreHistoryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

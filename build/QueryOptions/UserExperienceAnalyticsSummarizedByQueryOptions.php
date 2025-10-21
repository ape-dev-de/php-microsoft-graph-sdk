<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsSummarizedBy resources
 *
 * Available select fields:
 */
class UserExperienceAnalyticsSummarizedByQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsSummarizedBy
     */

    /**
     * Select specific UserExperienceAnalyticsSummarizedBy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

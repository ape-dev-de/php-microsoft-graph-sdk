<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationRubricOutcome resources
 *
 * Available select fields:
 * - publishedRubricQualityFeedback
 * - publishedRubricQualitySelectedLevels
 * - rubricQualityFeedback
 * - rubricQualitySelectedLevels
 */
class EducationRubricOutcomeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationRubricOutcome
     */
    public const FIELD_PUBLISHED_RUBRIC_QUALITY_FEEDBACK = 'publishedRubricQualityFeedback';
    public const FIELD_PUBLISHED_RUBRIC_QUALITY_SELECTED_LEVELS = 'publishedRubricQualitySelectedLevels';
    public const FIELD_RUBRIC_QUALITY_FEEDBACK = 'rubricQualityFeedback';
    public const FIELD_RUBRIC_QUALITY_SELECTED_LEVELS = 'rubricQualitySelectedLevels';

    /**
     * Select specific EducationRubricOutcome properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

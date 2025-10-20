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
    public const FIELD_PUBLISHED_RUBRIC_QUALITY_FEEDBACK = 'publishedRubricQualityFeedback';
    public const FIELD_PUBLISHED_RUBRIC_QUALITY_SELECTED_LEVELS = 'publishedRubricQualitySelectedLevels';
    public const FIELD_RUBRIC_QUALITY_FEEDBACK = 'rubricQualityFeedback';
    public const FIELD_RUBRIC_QUALITY_SELECTED_LEVELS = 'rubricQualitySelectedLevels';

    /**
     * Select specific EducationRubricOutcome properties
     * 
     * @param array<string> $select Use EducationRubricOutcomeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

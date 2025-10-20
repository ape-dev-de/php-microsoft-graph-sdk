<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationAssignmentSettings resources
 *
 * Available select fields:
 * - submissionAnimationDisabled
 * - gradingCategories
 */
class EducationAssignmentSettingsQueryOptions extends QueryOptions
{
    public const FIELD_SUBMISSION_ANIMATION_DISABLED = 'submissionAnimationDisabled';
    public const FIELD_GRADING_CATEGORIES = 'gradingCategories';

    /**
     * Select specific EducationAssignmentSettings properties
     * 
     * @param array<string> $select Use EducationAssignmentSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

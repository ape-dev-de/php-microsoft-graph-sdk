<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationFeedback resources
 *
 * Available select fields:
 * - feedbackBy
 * - feedbackDateTime
 * - text
 */
class EducationFeedbackQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationFeedback
     */
    public const FIELD_FEEDBACK_BY = 'feedbackBy';
    public const FIELD_FEEDBACK_DATE_TIME = 'feedbackDateTime';
    public const FIELD_TEXT = 'text';

    /**
     * Select specific EducationFeedback properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

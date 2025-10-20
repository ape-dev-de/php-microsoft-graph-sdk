<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewStage resources
 *
 * Available select fields:
 * - endDateTime
 * - fallbackReviewers
 * - reviewers
 * - startDateTime
 * - status
 * - decisions
 */
class AccessReviewStageQueryOptions extends QueryOptions
{
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_FALLBACK_REVIEWERS = 'fallbackReviewers';
    public const FIELD_REVIEWERS = 'reviewers';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_DECISIONS = 'decisions';

    /**
     * Select specific AccessReviewStage properties
     * 
     * @param array<string> $select Use AccessReviewStageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

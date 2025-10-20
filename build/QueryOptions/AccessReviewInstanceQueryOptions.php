<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewInstance resources
 *
 * Available select fields:
 * - endDateTime
 * - fallbackReviewers
 * - reviewers
 * - scope
 * - startDateTime
 * - status
 * - contactedReviewers
 * - decisions
 * - stages
 */
class AccessReviewInstanceQueryOptions extends QueryOptions
{
    public const FIELD_END_DATE_TIME = 'endDateTime';
    public const FIELD_FALLBACK_REVIEWERS = 'fallbackReviewers';
    public const FIELD_REVIEWERS = 'reviewers';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_START_DATE_TIME = 'startDateTime';
    public const FIELD_STATUS = 'status';
    public const FIELD_CONTACTED_REVIEWERS = 'contactedReviewers';
    public const FIELD_DECISIONS = 'decisions';
    public const FIELD_STAGES = 'stages';

    /**
     * Select specific AccessReviewInstance properties
     * 
     * @param array<string> $select Use AccessReviewInstanceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

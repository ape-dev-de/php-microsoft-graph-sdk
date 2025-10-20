<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewStageSettings resources
 *
 * Available select fields:
 * - decisionsThatWillMoveToNextStage
 * - dependsOn
 * - durationInDays
 * - fallbackReviewers
 * - recommendationInsightSettings
 * - recommendationsEnabled
 * - reviewers
 * - stageId
 */
class AccessReviewStageSettingsQueryOptions extends QueryOptions
{
    public const FIELD_DECISIONS_THAT_WILL_MOVE_TO_NEXT_STAGE = 'decisionsThatWillMoveToNextStage';
    public const FIELD_DEPENDS_ON = 'dependsOn';
    public const FIELD_DURATION_IN_DAYS = 'durationInDays';
    public const FIELD_FALLBACK_REVIEWERS = 'fallbackReviewers';
    public const FIELD_RECOMMENDATION_INSIGHT_SETTINGS = 'recommendationInsightSettings';
    public const FIELD_RECOMMENDATIONS_ENABLED = 'recommendationsEnabled';
    public const FIELD_REVIEWERS = 'reviewers';
    public const FIELD_STAGE_ID = 'stageId';

    /**
     * Select specific AccessReviewStageSettings properties
     * 
     * @param array<string> $select Use AccessReviewStageSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

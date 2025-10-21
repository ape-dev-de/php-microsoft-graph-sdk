<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewScheduleSettings resources
 *
 * Available select fields:
 * - applyActions
 * - autoApplyDecisionsEnabled
 * - decisionHistoriesForReviewersEnabled
 * - defaultDecision
 * - defaultDecisionEnabled
 * - instanceDurationInDays
 * - justificationRequiredOnApproval
 * - mailNotificationsEnabled
 * - recommendationInsightSettings
 * - recommendationLookBackDuration
 * - recommendationsEnabled
 * - recurrence
 * - reminderNotificationsEnabled
 */
class AccessReviewScheduleSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewScheduleSettings
     */
    public const FIELD_APPLY_ACTIONS = 'applyActions';
    public const FIELD_AUTO_APPLY_DECISIONS_ENABLED = 'autoApplyDecisionsEnabled';
    public const FIELD_DECISION_HISTORIES_FOR_REVIEWERS_ENABLED = 'decisionHistoriesForReviewersEnabled';
    public const FIELD_DEFAULT_DECISION = 'defaultDecision';
    public const FIELD_DEFAULT_DECISION_ENABLED = 'defaultDecisionEnabled';
    public const FIELD_INSTANCE_DURATION_IN_DAYS = 'instanceDurationInDays';
    public const FIELD_JUSTIFICATION_REQUIRED_ON_APPROVAL = 'justificationRequiredOnApproval';
    public const FIELD_MAIL_NOTIFICATIONS_ENABLED = 'mailNotificationsEnabled';
    public const FIELD_RECOMMENDATION_INSIGHT_SETTINGS = 'recommendationInsightSettings';
    public const FIELD_RECOMMENDATION_LOOK_BACK_DURATION = 'recommendationLookBackDuration';
    public const FIELD_RECOMMENDATIONS_ENABLED = 'recommendationsEnabled';
    public const FIELD_RECURRENCE = 'recurrence';
    public const FIELD_REMINDER_NOTIFICATIONS_ENABLED = 'reminderNotificationsEnabled';

    /**
     * Select specific AccessReviewScheduleSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewScheduleSettings
 */
class AccessReviewScheduleSettings
{
    public function __construct(
        /** Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction. */
        public array $applyActions = [],
        /** Indicates whether decisions are automatically applied. When set to false, an admin must apply the decisions manually once the reviewer completes the access review. When set to true, decisions are applied automatically after the access review instance duration ends, whether or not the reviewers have responded. Default value is false.  CAUTION: If both autoApplyDecisionsEnabled and defaultDecisionEnabled are true, all access for the principals to the resource risks being revoked if the reviewers fail to respond. */
        public ?bool $autoApplyDecisionsEnabled = null,
        /** Indicates whether decisions on previous access review stages are available for reviewers on an accessReviewInstance with multiple subsequent stages. If not provided, the default is disabled (false). */
        public ?bool $decisionHistoriesForReviewersEnabled = null,
        /** Decision chosen if defaultDecisionEnabled is enabled. Can be one of Approve, Deny, or Recommendation. */
        public ?string $defaultDecision = null,
        /** Indicates whether the default decision is enabled or disabled when reviewers do not respond. Default value is false.  CAUTION: If both autoApplyDecisionsEnabled and defaultDecisionEnabled are true, all access for the principals to the resource risks being revoked if the reviewers fail to respond. */
        public ?bool $defaultDecisionEnabled = null,
        /** Duration of an access review instance in days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its durationInDays setting will be used instead of the value of this property. */
        public ?float $instanceDurationInDays = null,
        /** Indicates whether reviewers are required to provide justification with their decision. Default value is false. */
        public ?bool $justificationRequiredOnApproval = null,
        /** Indicates whether emails are enabled or disabled. Default value is false. */
        public ?bool $mailNotificationsEnabled = null,
        /** Optional. Describes the types of insights that aid reviewers to make access review decisions. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationInsightSettings setting will be used instead of the value of this property. */
        public array $recommendationInsightSettings = [],
        /** Optional field. Indicates the period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look-back duration. For reviews of groups and Microsoft Entra roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationLookBackDuration setting will be used instead of the value of this property. */
        public ?string $recommendationLookBackDuration = null,
        /** Indicates whether decision recommendations are enabled or disabled. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationsEnabled setting will be used instead of the value of this property. */
        public ?bool $recommendationsEnabled = null,
        /** Detailed settings for recurrence using the standard Outlook recurrence object. Note: Only dayOfMonth, interval, and type (weekly, absoluteMonthly) properties are supported. Use the property startDate on recurrenceRange to determine the day the review starts. */
        public ?PatternedRecurrence $recurrence = null,
        /** Indicates whether reminders are enabled or disabled. Default value is false. */
        public ?bool $reminderNotificationsEnabled = null
    ) {}
}

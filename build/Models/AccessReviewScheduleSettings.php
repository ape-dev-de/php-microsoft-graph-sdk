<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewScheduleSettings
 */
class AccessReviewScheduleSettings
{
    /**
     * Optional field. Describes the  actions to take once a review is complete. There are two types that are currently supported: removeAccessApplyAction (default) and disableAndDeleteUserApplyAction. Field only needs to be specified in the case of disableAndDeleteUserApplyAction.
     */
    private array $applyActions = [];

    /**
     * Indicates whether decisions are automatically applied. When set to false, an admin must apply the decisions manually once the reviewer completes the access review. When set to true, decisions are applied automatically after the access review instance duration ends, whether or not the reviewers have responded. Default value is false.  CAUTION: If both autoApplyDecisionsEnabled and defaultDecisionEnabled are true, all access for the principals to the resource risks being revoked if the reviewers fail to respond.
     */
    private ?bool $autoApplyDecisionsEnabled;

    /**
     * Indicates whether decisions on previous access review stages are available for reviewers on an accessReviewInstance with multiple subsequent stages. If not provided, the default is disabled (false).
     */
    private ?bool $decisionHistoriesForReviewersEnabled;

    /**
     * Decision chosen if defaultDecisionEnabled is enabled. Can be one of Approve, Deny, or Recommendation.
     */
    private ?string $defaultDecision;

    /**
     * Indicates whether the default decision is enabled or disabled when reviewers do not respond. Default value is false.  CAUTION: If both autoApplyDecisionsEnabled and defaultDecisionEnabled are true, all access for the principals to the resource risks being revoked if the reviewers fail to respond.
     */
    private ?bool $defaultDecisionEnabled;

    /**
     * Duration of an access review instance in days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its durationInDays setting will be used instead of the value of this property.
     */
    private ?float $instanceDurationInDays;

    /**
     * Indicates whether reviewers are required to provide justification with their decision. Default value is false.
     */
    private ?bool $justificationRequiredOnApproval;

    /**
     * Indicates whether emails are enabled or disabled. Default value is false.
     */
    private ?bool $mailNotificationsEnabled;

    /**
     * Optional. Describes the types of insights that aid reviewers to make access review decisions. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationInsightSettings setting will be used instead of the value of this property.
     */
    private array $recommendationInsightSettings = [];

    /**
     * Optional field. Indicates the period of inactivity (with respect to the start date of the review instance) that recommendations will be configured from. The recommendation will be to deny if the user is inactive during the look-back duration. For reviews of groups and Microsoft Entra roles, any duration is accepted. For reviews of applications, 30 days is the maximum duration. If not specified, the duration is 30 days. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationLookBackDuration setting will be used instead of the value of this property.
     */
    private ?string $recommendationLookBackDuration;

    /**
     * Indicates whether decision recommendations are enabled or disabled. NOTE: If the stageSettings of the accessReviewScheduleDefinition object is defined, its recommendationsEnabled setting will be used instead of the value of this property.
     */
    private ?bool $recommendationsEnabled;

    /**
     * Detailed settings for recurrence using the standard Outlook recurrence object. Note: Only dayOfMonth, interval, and type (weekly, absoluteMonthly) properties are supported. Use the property startDate on recurrenceRange to determine the day the review starts.
     */
    private ?string $recurrence;

    /**
     * Indicates whether reminders are enabled or disabled. Default value is false.
     */
    private ?string $reminderNotificationsEnabled;


    public function getApplyActions(): array
    {
        return $this->applyActions;
    }

    public function setApplyActions(array $applyActions): self
    {
        $this->applyActions = $applyActions;
        return $this;
    }

    public function getAutoApplyDecisionsEnabled(): ?bool
    {
        return $this->autoApplyDecisionsEnabled;
    }

    public function setAutoApplyDecisionsEnabled(?bool $autoApplyDecisionsEnabled): self
    {
        $this->autoApplyDecisionsEnabled = $autoApplyDecisionsEnabled;
        return $this;
    }

    public function getDecisionHistoriesForReviewersEnabled(): ?bool
    {
        return $this->decisionHistoriesForReviewersEnabled;
    }

    public function setDecisionHistoriesForReviewersEnabled(?bool $decisionHistoriesForReviewersEnabled): self
    {
        $this->decisionHistoriesForReviewersEnabled = $decisionHistoriesForReviewersEnabled;
        return $this;
    }

    public function getDefaultDecision(): ?string
    {
        return $this->defaultDecision;
    }

    public function setDefaultDecision(?string $defaultDecision): self
    {
        $this->defaultDecision = $defaultDecision;
        return $this;
    }

    public function getDefaultDecisionEnabled(): ?bool
    {
        return $this->defaultDecisionEnabled;
    }

    public function setDefaultDecisionEnabled(?bool $defaultDecisionEnabled): self
    {
        $this->defaultDecisionEnabled = $defaultDecisionEnabled;
        return $this;
    }

    public function getInstanceDurationInDays(): ?float
    {
        return $this->instanceDurationInDays;
    }

    public function setInstanceDurationInDays(?float $instanceDurationInDays): self
    {
        $this->instanceDurationInDays = $instanceDurationInDays;
        return $this;
    }

    public function getJustificationRequiredOnApproval(): ?bool
    {
        return $this->justificationRequiredOnApproval;
    }

    public function setJustificationRequiredOnApproval(?bool $justificationRequiredOnApproval): self
    {
        $this->justificationRequiredOnApproval = $justificationRequiredOnApproval;
        return $this;
    }

    public function getMailNotificationsEnabled(): ?bool
    {
        return $this->mailNotificationsEnabled;
    }

    public function setMailNotificationsEnabled(?bool $mailNotificationsEnabled): self
    {
        $this->mailNotificationsEnabled = $mailNotificationsEnabled;
        return $this;
    }

    public function getRecommendationInsightSettings(): array
    {
        return $this->recommendationInsightSettings;
    }

    public function setRecommendationInsightSettings(array $recommendationInsightSettings): self
    {
        $this->recommendationInsightSettings = $recommendationInsightSettings;
        return $this;
    }

    public function getRecommendationLookBackDuration(): ?string
    {
        return $this->recommendationLookBackDuration;
    }

    public function setRecommendationLookBackDuration(?string $recommendationLookBackDuration): self
    {
        $this->recommendationLookBackDuration = $recommendationLookBackDuration;
        return $this;
    }

    public function getRecommendationsEnabled(): ?bool
    {
        return $this->recommendationsEnabled;
    }

    public function setRecommendationsEnabled(?bool $recommendationsEnabled): self
    {
        $this->recommendationsEnabled = $recommendationsEnabled;
        return $this;
    }

    public function getRecurrence(): ?string
    {
        return $this->recurrence;
    }

    public function setRecurrence(?string $recurrence): self
    {
        $this->recurrence = $recurrence;
        return $this;
    }

    public function getReminderNotificationsEnabled(): ?string
    {
        return $this->reminderNotificationsEnabled;
    }

    public function setReminderNotificationsEnabled(?string $reminderNotificationsEnabled): self
    {
        $this->reminderNotificationsEnabled = $reminderNotificationsEnabled;
        return $this;
    }

}

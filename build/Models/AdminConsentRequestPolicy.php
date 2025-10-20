<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AdminConsentRequestPolicy
 */
class AdminConsentRequestPolicy
{
    /**
     * Specifies whether the admin consent request feature is enabled or disabled. Required.
     */
    private ?bool $isEnabled;

    /**
     * Specifies whether reviewers will receive notifications. Required.
     */
    private ?bool $notifyReviewers;

    /**
     * Specifies whether reviewers will receive reminder emails. Required.
     */
    private ?bool $remindersEnabled;

    /**
     * Specifies the duration the request is active before it automatically expires if no decision is applied.
     */
    private ?float $requestDurationInDays;

    /**
     * The list of reviewers for the admin consent. Required.
     */
    private array $reviewers = [];

    /**
     * Specifies the version of this policy. When the policy is updated, this version is updated. Read-only.
     */
    private ?string $version;

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getNotifyReviewers(): ?bool
    {
        return $this->notifyReviewers;
    }

    public function setNotifyReviewers(?bool $notifyReviewers): self
    {
        $this->notifyReviewers = $notifyReviewers;
        return $this;
    }

    public function getRemindersEnabled(): ?bool
    {
        return $this->remindersEnabled;
    }

    public function setRemindersEnabled(?bool $remindersEnabled): self
    {
        $this->remindersEnabled = $remindersEnabled;
        return $this;
    }

    public function getRequestDurationInDays(): ?float
    {
        return $this->requestDurationInDays;
    }

    public function setRequestDurationInDays(?float $requestDurationInDays): self
    {
        $this->requestDurationInDays = $requestDurationInDays;
        return $this;
    }

    public function getReviewers(): array
    {
        return $this->reviewers;
    }

    public function setReviewers(array $reviewers): self
    {
        $this->reviewers = $reviewers;
        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;
        return $this;
    }

}

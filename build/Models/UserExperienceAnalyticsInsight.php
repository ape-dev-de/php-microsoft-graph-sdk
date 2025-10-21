<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsInsight
 */
class UserExperienceAnalyticsInsight
{
    /**
     * The unique identifier of the user experience analytics insight.
     */
    private ?string $insightId;

    /**
     */
    private ?string $severity;

    /**
     * The unique identifier of the user experience analytics metric.
     */
    private ?string $userExperienceAnalyticsMetricId;

    /**
     * The user experience analytics insight is the recomendation to improve the user experience analytics score.
     * @var string[]
     */
    private array $values = [];


    public function getInsightId(): ?string
    {
        return $this->insightId;
    }

    public function setInsightId(?string $insightId): self
    {
        $this->insightId = $insightId;
        return $this;
    }

    public function getSeverity(): ?string
    {
        return $this->severity;
    }

    public function setSeverity(?string $severity): self
    {
        $this->severity = $severity;
        return $this;
    }

    public function getUserExperienceAnalyticsMetricId(): ?string
    {
        return $this->userExperienceAnalyticsMetricId;
    }

    public function setUserExperienceAnalyticsMetricId(?string $userExperienceAnalyticsMetricId): self
    {
        $this->userExperienceAnalyticsMetricId = $userExperienceAnalyticsMetricId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getValues(): array
    {
        return $this->values;
    }

    /**
     * @param string[] $values
     */
    public function setValues(array $values): self
    {
        $this->values = $values;
        return $this;
    }

}

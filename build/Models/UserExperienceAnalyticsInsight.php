<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsInsight
 */
class UserExperienceAnalyticsInsight
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier of the user experience analytics insight. */
    public ?string $insightId = null;

    /**  */
    public ?UserExperienceAnalyticsInsightSeverity $severity = null;

    /** The unique identifier of the user experience analytics metric. */
    public ?string $userExperienceAnalyticsMetricId = null;

    /** 
     * The value of the user experience analytics insight.
     * @var UserExperienceAnalyticsInsightValue[]
     */
    public array $values = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['insightId'])) {
            $this->insightId = $data['insightId'];
        }
        if (isset($data['severity'])) {
            $this->severity = is_string($data['severity']) ? UserExperienceAnalyticsInsightSeverity::tryFrom($data['severity']) : $data['severity'];
        }
        if (isset($data['userExperienceAnalyticsMetricId'])) {
            $this->userExperienceAnalyticsMetricId = $data['userExperienceAnalyticsMetricId'];
        }
        if (isset($data['values'])) {
            $this->values = $data['values'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

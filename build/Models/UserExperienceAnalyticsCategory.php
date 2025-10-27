<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsCategory
 */
class UserExperienceAnalyticsCategory
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The insights for the category. Read-only.
     * @var UserExperienceAnalyticsInsight[]
     */
    public array $insights = [];

    /** 
     * The metric values for the user experience analytics category. Read-only.
     * @var UserExperienceAnalyticsMetric[]
     */
    public array $metricValues = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['insights'])) {
            $this->insights = $data['insights'];
        }
        if (isset($data['metricValues'])) {
            $this->metricValues = $data['metricValues'];
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

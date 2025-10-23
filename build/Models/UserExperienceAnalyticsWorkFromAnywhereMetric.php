<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereMetric
 */
class UserExperienceAnalyticsWorkFromAnywhereMetric
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The work from anywhere metric devices. Read-only.
     * @var UserExperienceAnalyticsWorkFromAnywhereDevice[]
     */
    public array $metricDevices = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['metricDevices'])) {
            $this->metricDevices = $data['metricDevices'];
        }
    }
}

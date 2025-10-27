<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsBaseline
 */
class UserExperienceAnalyticsBaseline
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date the custom baseline was created. The value cannot be modified and is automatically populated when the baseline is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The name of the baseline. */
    public ?string $displayName = null;

    /** When TRUE, indicates the current baseline is the commercial median baseline. When FALSE, indicates it is a custom baseline. FALSE by default. */
    public ?bool $isBuiltIn = null;

    /** 
     * The scores and insights for the application health metrics.
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public UserExperienceAnalyticsCategory|\stdClass|null $appHealthMetrics = null;

    /** 
     * The scores and insights for the battery health metrics.
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public UserExperienceAnalyticsCategory|\stdClass|null $batteryHealthMetrics = null;

    /** 
     * The scores and insights for the best practices metrics.
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public UserExperienceAnalyticsCategory|\stdClass|null $bestPracticesMetrics = null;

    /** 
     * The scores and insights for the device boot performance metrics.
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public UserExperienceAnalyticsCategory|\stdClass|null $deviceBootPerformanceMetrics = null;

    /** 
     * The scores and insights for the reboot analytics metrics.
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public UserExperienceAnalyticsCategory|\stdClass|null $rebootAnalyticsMetrics = null;

    /** 
     * The scores and insights for the resource performance metrics.
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public UserExperienceAnalyticsCategory|\stdClass|null $resourcePerformanceMetrics = null;

    /** 
     * The scores and insights for the work from anywhere metrics.
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public UserExperienceAnalyticsCategory|\stdClass|null $workFromAnywhereMetrics = null;


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
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isBuiltIn'])) {
            $this->isBuiltIn = is_bool($data['isBuiltIn']) ? $data['isBuiltIn'] : (bool)$data['isBuiltIn'];
        }
        if (isset($data['appHealthMetrics'])) {
            $this->appHealthMetrics = is_array($data['appHealthMetrics']) ? new UserExperienceAnalyticsCategory($data['appHealthMetrics']) : $data['appHealthMetrics'];
        }
        if (isset($data['batteryHealthMetrics'])) {
            $this->batteryHealthMetrics = is_array($data['batteryHealthMetrics']) ? new UserExperienceAnalyticsCategory($data['batteryHealthMetrics']) : $data['batteryHealthMetrics'];
        }
        if (isset($data['bestPracticesMetrics'])) {
            $this->bestPracticesMetrics = is_array($data['bestPracticesMetrics']) ? new UserExperienceAnalyticsCategory($data['bestPracticesMetrics']) : $data['bestPracticesMetrics'];
        }
        if (isset($data['deviceBootPerformanceMetrics'])) {
            $this->deviceBootPerformanceMetrics = is_array($data['deviceBootPerformanceMetrics']) ? new UserExperienceAnalyticsCategory($data['deviceBootPerformanceMetrics']) : $data['deviceBootPerformanceMetrics'];
        }
        if (isset($data['rebootAnalyticsMetrics'])) {
            $this->rebootAnalyticsMetrics = is_array($data['rebootAnalyticsMetrics']) ? new UserExperienceAnalyticsCategory($data['rebootAnalyticsMetrics']) : $data['rebootAnalyticsMetrics'];
        }
        if (isset($data['resourcePerformanceMetrics'])) {
            $this->resourcePerformanceMetrics = is_array($data['resourcePerformanceMetrics']) ? new UserExperienceAnalyticsCategory($data['resourcePerformanceMetrics']) : $data['resourcePerformanceMetrics'];
        }
        if (isset($data['workFromAnywhereMetrics'])) {
            $this->workFromAnywhereMetrics = is_array($data['workFromAnywhereMetrics']) ? new UserExperienceAnalyticsCategory($data['workFromAnywhereMetrics']) : $data['workFromAnywhereMetrics'];
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

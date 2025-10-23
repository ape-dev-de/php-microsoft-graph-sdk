<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsBaseline
 */
class UserExperienceAnalyticsBaseline
{
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
    public mixed $appHealthMetrics = null;

    /** 
     * The scores and insights for the battery health metrics.
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public mixed $batteryHealthMetrics = null;

    /** 
     * The scores and insights for the best practices metrics.
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public mixed $bestPracticesMetrics = null;

    /** 
     * The scores and insights for the device boot performance metrics.
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public mixed $deviceBootPerformanceMetrics = null;

    /** 
     * The scores and insights for the reboot analytics metrics.
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public mixed $rebootAnalyticsMetrics = null;

    /** 
     * The scores and insights for the resource performance metrics.
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public mixed $resourcePerformanceMetrics = null;

    /** 
     * The scores and insights for the work from anywhere metrics.
     * @var UserExperienceAnalyticsCategory|\stdClass|null
     */
    public mixed $workFromAnywhereMetrics = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
            $this->isBuiltIn = $data['isBuiltIn'];
        }
        if (isset($data['appHealthMetrics'])) {
            $this->appHealthMetrics = $data['appHealthMetrics'];
        }
        if (isset($data['batteryHealthMetrics'])) {
            $this->batteryHealthMetrics = $data['batteryHealthMetrics'];
        }
        if (isset($data['bestPracticesMetrics'])) {
            $this->bestPracticesMetrics = $data['bestPracticesMetrics'];
        }
        if (isset($data['deviceBootPerformanceMetrics'])) {
            $this->deviceBootPerformanceMetrics = $data['deviceBootPerformanceMetrics'];
        }
        if (isset($data['rebootAnalyticsMetrics'])) {
            $this->rebootAnalyticsMetrics = $data['rebootAnalyticsMetrics'];
        }
        if (isset($data['resourcePerformanceMetrics'])) {
            $this->resourcePerformanceMetrics = $data['resourcePerformanceMetrics'];
        }
        if (isset($data['workFromAnywhereMetrics'])) {
            $this->workFromAnywhereMetrics = $data['workFromAnywhereMetrics'];
        }
    }
}

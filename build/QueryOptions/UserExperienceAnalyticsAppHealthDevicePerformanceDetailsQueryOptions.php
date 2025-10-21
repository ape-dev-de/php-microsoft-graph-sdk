<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsAppHealthDevicePerformanceDetails resources
 *
 * Available select fields:
 * - appDisplayName
 * - appPublisher
 * - appVersion
 * - deviceDisplayName
 * - deviceId
 * - eventDateTime
 * - eventType
 */
class UserExperienceAnalyticsAppHealthDevicePerformanceDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsAppHealthDevicePerformanceDetails
     */
    public const FIELD_APP_DISPLAY_NAME = 'appDisplayName';
    public const FIELD_APP_PUBLISHER = 'appPublisher';
    public const FIELD_APP_VERSION = 'appVersion';
    public const FIELD_DEVICE_DISPLAY_NAME = 'deviceDisplayName';
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_EVENT_DATE_TIME = 'eventDateTime';
    public const FIELD_EVENT_TYPE = 'eventType';

    /**
     * Select specific UserExperienceAnalyticsAppHealthDevicePerformanceDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

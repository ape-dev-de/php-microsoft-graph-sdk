<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserTrainingContentEventInfo resources
 *
 * Available select fields:
 * - browser
 * - contentDateTime
 * - ipAddress
 * - osPlatformDeviceDetails
 * - potentialScoreImpact
 */
class UserTrainingContentEventInfoQueryOptions extends QueryOptions
{
    public const FIELD_BROWSER = 'browser';
    public const FIELD_CONTENT_DATE_TIME = 'contentDateTime';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_OS_PLATFORM_DEVICE_DETAILS = 'osPlatformDeviceDetails';
    public const FIELD_POTENTIAL_SCORE_IMPACT = 'potentialScoreImpact';

    /**
     * Select specific UserTrainingContentEventInfo properties
     * 
     * @param array<string> $select Use UserTrainingContentEventInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcDeviceImage resources
 *
 * Available select fields:
 * - displayName
 * - errorCode
 * - expirationDate
 * - lastModifiedDateTime
 * - operatingSystem
 * - osBuildNumber
 * - osStatus
 * - sourceImageResourceId
 * - status
 * - version
 */
class CloudPcDeviceImageQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ERROR_CODE = 'errorCode';
    public const FIELD_EXPIRATION_DATE = 'expirationDate';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_OPERATING_SYSTEM = 'operatingSystem';
    public const FIELD_OS_BUILD_NUMBER = 'osBuildNumber';
    public const FIELD_OS_STATUS = 'osStatus';
    public const FIELD_SOURCE_IMAGE_RESOURCE_ID = 'sourceImageResourceId';
    public const FIELD_STATUS = 'status';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific CloudPcDeviceImage properties
     * 
     * @param array<string> $select Use CloudPcDeviceImageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

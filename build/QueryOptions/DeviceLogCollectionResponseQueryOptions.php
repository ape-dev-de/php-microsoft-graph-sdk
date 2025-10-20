<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceLogCollectionResponse resources
 *
 * Available select fields:
 * - enrolledByUser
 * - expirationDateTimeUTC
 * - initiatedByUserPrincipalName
 * - managedDeviceId
 * - receivedDateTimeUTC
 * - requestedDateTimeUTC
 * - sizeInKB
 * - status
 */
class DeviceLogCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_ENROLLED_BY_USER = 'enrolledByUser';
    public const FIELD_EXPIRATION_DATE_TIME_UTC = 'expirationDateTimeUTC';
    public const FIELD_INITIATED_BY_USER_PRINCIPAL_NAME = 'initiatedByUserPrincipalName';
    public const FIELD_MANAGED_DEVICE_ID = 'managedDeviceId';
    public const FIELD_RECEIVED_DATE_TIME_UTC = 'receivedDateTimeUTC';
    public const FIELD_REQUESTED_DATE_TIME_UTC = 'requestedDateTimeUTC';
    public const FIELD_SIZE_IN_KB = 'sizeInKB';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific DeviceLogCollectionResponse properties
     * 
     * @param array<string> $select Use DeviceLogCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceLocalCredentialInfo resources
 *
 * Available select fields:
 * - credentials
 * - deviceName
 * - lastBackupDateTime
 * - refreshDateTime
 */
class DeviceLocalCredentialInfoQueryOptions extends QueryOptions
{
    public const FIELD_CREDENTIALS = 'credentials';
    public const FIELD_DEVICE_NAME = 'deviceName';
    public const FIELD_LAST_BACKUP_DATE_TIME = 'lastBackupDateTime';
    public const FIELD_REFRESH_DATE_TIME = 'refreshDateTime';

    /**
     * Select specific DeviceLocalCredentialInfo properties
     * 
     * @param array<string> $select Use DeviceLocalCredentialInfoQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

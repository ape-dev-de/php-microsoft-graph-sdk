<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceLocalCredential resources
 *
 * Available select fields:
 * - accountName
 * - accountSid
 * - backupDateTime
 * - passwordBase64
 */
class DeviceLocalCredentialQueryOptions extends QueryOptions
{
    public const FIELD_ACCOUNT_NAME = 'accountName';
    public const FIELD_ACCOUNT_SID = 'accountSid';
    public const FIELD_BACKUP_DATE_TIME = 'backupDateTime';
    public const FIELD_PASSWORD_BASE64 = 'passwordBase64';

    /**
     * Select specific DeviceLocalCredential properties
     * 
     * @param array<string> $select Use DeviceLocalCredentialQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

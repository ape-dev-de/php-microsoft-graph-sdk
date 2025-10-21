<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VppToken resources
 *
 * Available select fields:
 * - appleId
 * - automaticallyUpdateApps
 * - countryOrRegion
 * - expirationDateTime
 * - lastModifiedDateTime
 * - lastSyncDateTime
 * - lastSyncStatus
 * - organizationName
 * - state
 * - token
 * - vppTokenAccountType
 */
class VppTokenQueryOptions extends QueryOptions
{
    /**
     * Available select fields for VppToken
     */
    public const FIELD_APPLE_ID = 'appleId';
    public const FIELD_AUTOMATICALLY_UPDATE_APPS = 'automaticallyUpdateApps';
    public const FIELD_COUNTRY_OR_REGION = 'countryOrRegion';
    public const FIELD_EXPIRATION_DATE_TIME = 'expirationDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_LAST_SYNC_DATE_TIME = 'lastSyncDateTime';
    public const FIELD_LAST_SYNC_STATUS = 'lastSyncStatus';
    public const FIELD_ORGANIZATION_NAME = 'organizationName';
    public const FIELD_STATE = 'state';
    public const FIELD_TOKEN = 'token';
    public const FIELD_VPP_TOKEN_ACCOUNT_TYPE = 'vppTokenAccountType';

    /**
     * Select specific VppToken properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

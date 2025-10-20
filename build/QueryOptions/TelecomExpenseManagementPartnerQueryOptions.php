<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TelecomExpenseManagementPartner resources
 *
 * Available select fields:
 * - appAuthorized
 * - displayName
 * - enabled
 * - lastConnectionDateTime
 * - url
 */
class TelecomExpenseManagementPartnerQueryOptions extends QueryOptions
{
    public const FIELD_APP_AUTHORIZED = 'appAuthorized';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ENABLED = 'enabled';
    public const FIELD_LAST_CONNECTION_DATE_TIME = 'lastConnectionDateTime';
    public const FIELD_URL = 'url';

    /**
     * Select specific TelecomExpenseManagementPartner properties
     * 
     * @param array<string> $select Use TelecomExpenseManagementPartnerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

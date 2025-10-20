<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftAuthenticatorAuthenticationMethod resources
 *
 * Available select fields:
 * - createdDateTime
 * - deviceTag
 * - displayName
 * - phoneAppVersion
 * - device
 */
class MicrosoftAuthenticatorAuthenticationMethodQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DEVICE_TAG = 'deviceTag';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_PHONE_APP_VERSION = 'phoneAppVersion';
    public const FIELD_DEVICE = 'device';

    /**
     * Select specific MicrosoftAuthenticatorAuthenticationMethod properties
     * 
     * @param array<string> $select Use MicrosoftAuthenticatorAuthenticationMethodQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PlatformCredentialAuthenticationMethod resources
 *
 * Available select fields:
 * - createdDateTime
 * - displayName
 * - keyStrength
 * - platform
 * - device
 */
class PlatformCredentialAuthenticationMethodQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PlatformCredentialAuthenticationMethod
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_KEY_STRENGTH = 'keyStrength';
    public const FIELD_PLATFORM = 'platform';
    public const FIELD_DEVICE = 'device';

    /**
     * Select specific PlatformCredentialAuthenticationMethod properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

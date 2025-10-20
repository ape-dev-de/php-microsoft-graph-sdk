<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsHelloForBusinessAuthenticationMethod resources
 *
 * Available select fields:
 * - createdDateTime
 * - displayName
 * - keyStrength
 * - device
 */
class WindowsHelloForBusinessAuthenticationMethodQueryOptions extends QueryOptions
{
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_KEY_STRENGTH = 'keyStrength';
    public const FIELD_DEVICE = 'device';

    /**
     * Select specific WindowsHelloForBusinessAuthenticationMethod properties
     * 
     * @param array<string> $select Use WindowsHelloForBusinessAuthenticationMethodQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

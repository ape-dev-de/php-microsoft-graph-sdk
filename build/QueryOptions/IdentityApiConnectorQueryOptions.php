<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityApiConnector resources
 *
 * Available select fields:
 * - authenticationConfiguration
 * - displayName
 * - targetUrl
 */
class IdentityApiConnectorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityApiConnector
     */
    public const FIELD_AUTHENTICATION_CONFIGURATION = 'authenticationConfiguration';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_TARGET_URL = 'targetUrl';

    /**
     * Select specific IdentityApiConnector properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

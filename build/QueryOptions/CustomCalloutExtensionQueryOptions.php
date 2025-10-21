<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomCalloutExtension resources
 *
 * Available select fields:
 * - authenticationConfiguration
 * - clientConfiguration
 * - description
 * - displayName
 * - endpointConfiguration
 */
class CustomCalloutExtensionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomCalloutExtension
     */
    public const FIELD_AUTHENTICATION_CONFIGURATION = 'authenticationConfiguration';
    public const FIELD_CLIENT_CONFIGURATION = 'clientConfiguration';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ENDPOINT_CONFIGURATION = 'endpointConfiguration';

    /**
     * Select specific CustomCalloutExtension properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

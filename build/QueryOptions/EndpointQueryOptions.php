<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Endpoint resources
 *
 * Available select fields:
 * - capability
 * - providerId
 * - providerName
 * - providerResourceId
 * - uri
 */
class EndpointQueryOptions extends QueryOptions
{
    public const FIELD_CAPABILITY = 'capability';
    public const FIELD_PROVIDER_ID = 'providerId';
    public const FIELD_PROVIDER_NAME = 'providerName';
    public const FIELD_PROVIDER_RESOURCE_ID = 'providerResourceId';
    public const FIELD_URI = 'uri';

    /**
     * Select specific Endpoint properties
     * 
     * @param array<string> $select Use EndpointQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

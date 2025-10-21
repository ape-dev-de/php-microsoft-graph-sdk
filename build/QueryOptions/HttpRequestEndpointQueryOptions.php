<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for HttpRequestEndpoint resources
 *
 * Available select fields:
 * - targetUrl
 */
class HttpRequestEndpointQueryOptions extends QueryOptions
{
    /**
     * Available select fields for HttpRequestEndpoint
     */
    public const FIELD_TARGET_URL = 'targetUrl';

    /**
     * Select specific HttpRequestEndpoint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

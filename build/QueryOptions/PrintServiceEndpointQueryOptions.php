<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintServiceEndpoint resources
 *
 * Available select fields:
 * - displayName
 * - uri
 */
class PrintServiceEndpointQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintServiceEndpoint
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_URI = 'uri';

    /**
     * Select specific PrintServiceEndpoint properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

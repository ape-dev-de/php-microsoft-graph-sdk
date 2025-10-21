<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionCalloutResponse resources
 *
 * Available select fields:
 * - data
 * - source
 * - type
 */
class CustomExtensionCalloutResponseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomExtensionCalloutResponse
     */
    public const FIELD_DATA = 'data';
    public const FIELD_SOURCE = 'source';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific CustomExtensionCalloutResponse properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

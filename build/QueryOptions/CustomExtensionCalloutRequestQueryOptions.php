<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionCalloutRequest resources
 *
 * Available select fields:
 * - data
 * - source
 * - type
 */
class CustomExtensionCalloutRequestQueryOptions extends QueryOptions
{
    public const FIELD_DATA = 'data';
    public const FIELD_SOURCE = 'source';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific CustomExtensionCalloutRequest properties
     * 
     * @param array<string> $select Use CustomExtensionCalloutRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WebPartData resources
 *
 * Available select fields:
 * - dataVersion
 * - description
 */
class WebPartDataQueryOptions extends QueryOptions
{
    public const FIELD_DATA_VERSION = 'dataVersion';
    public const FIELD_DESCRIPTION = 'description';

    /**
     * Select specific WebPartData properties
     * 
     * @param array<string> $select Use WebPartDataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

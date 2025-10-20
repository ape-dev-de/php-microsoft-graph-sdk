<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsSchema resources
 *
 * Available select fields:
 * - baseType
 * - items
 */
class ExternalConnectorsSchemaQueryOptions extends QueryOptions
{
    public const FIELD_BASE_TYPE = 'baseType';
    public const FIELD_ITEMS = 'items';

    /**
     * Select specific ExternalConnectorsSchema properties
     * 
     * @param array<string> $select Use ExternalConnectorsSchemaQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

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
    /**
     * Available select fields for ExternalConnectorsSchema
     */
    public const FIELD_BASE_TYPE = 'baseType';
    public const FIELD_ITEMS = 'items';

    /**
     * Select specific ExternalConnectorsSchema properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

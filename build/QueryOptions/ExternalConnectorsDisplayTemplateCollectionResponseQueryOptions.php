<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsDisplayTemplateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExternalConnectorsDisplayTemplateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsDisplayTemplateCollectionResponse properties
     * 
     * @param array<string> $select Use ExternalConnectorsDisplayTemplateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

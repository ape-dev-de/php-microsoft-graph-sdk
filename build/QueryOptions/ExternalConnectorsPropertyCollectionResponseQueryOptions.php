<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsPropertyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExternalConnectorsPropertyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsPropertyCollectionResponse properties
     * 
     * @param array<string> $select Use ExternalConnectorsPropertyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

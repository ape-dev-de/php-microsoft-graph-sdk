<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalItemContent resources
 *
 * Available select fields:
 * - type
 * - value
 */
class ExternalConnectorsExternalItemContentQueryOptions extends QueryOptions
{
    public const FIELD_TYPE = 'type';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsExternalItemContent properties
     * 
     * @param array<string> $select Use ExternalConnectorsExternalItemContentQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

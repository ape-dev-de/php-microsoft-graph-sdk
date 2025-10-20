<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsPropertyRuleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExternalConnectorsPropertyRuleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsPropertyRuleCollectionResponse properties
     * 
     * @param array<string> $select Use ExternalConnectorsPropertyRuleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

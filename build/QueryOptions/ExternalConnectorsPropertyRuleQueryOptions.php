<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsPropertyRule resources
 *
 * Available select fields:
 * - operation
 * - property
 * - values
 * - valuesJoinedBy
 */
class ExternalConnectorsPropertyRuleQueryOptions extends QueryOptions
{
    public const FIELD_OPERATION = 'operation';
    public const FIELD_PROPERTY = 'property';
    public const FIELD_VALUES = 'values';
    public const FIELD_VALUES_JOINED_BY = 'valuesJoinedBy';

    /**
     * Select specific ExternalConnectorsPropertyRule properties
     * 
     * @param array<string> $select Use ExternalConnectorsPropertyRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryNoncustodialDataSource resources
 *
 * Available select fields:
 * - dataSource
 * - lastIndexOperation
 */
class SecurityEdiscoveryNoncustodialDataSourceQueryOptions extends QueryOptions
{
    public const FIELD_DATA_SOURCE = 'dataSource';
    public const FIELD_LAST_INDEX_OPERATION = 'lastIndexOperation';

    /**
     * Select specific SecurityEdiscoveryNoncustodialDataSource properties
     * 
     * @param array<string> $select Use SecurityEdiscoveryNoncustodialDataSourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

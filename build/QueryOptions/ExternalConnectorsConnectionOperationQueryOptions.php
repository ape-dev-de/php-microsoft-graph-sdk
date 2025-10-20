<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsConnectionOperation resources
 *
 * Available select fields:
 * - error
 * - status
 */
class ExternalConnectorsConnectionOperationQueryOptions extends QueryOptions
{
    public const FIELD_ERROR = 'error';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific ExternalConnectorsConnectionOperation properties
     * 
     * @param array<string> $select Use ExternalConnectorsConnectionOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

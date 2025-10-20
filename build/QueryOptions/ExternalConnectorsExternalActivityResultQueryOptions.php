<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalActivityResult resources
 *
 * Available select fields:
 * - error
 */
class ExternalConnectorsExternalActivityResultQueryOptions extends QueryOptions
{
    public const FIELD_ERROR = 'error';

    /**
     * Select specific ExternalConnectorsExternalActivityResult properties
     * 
     * @param array<string> $select Use ExternalConnectorsExternalActivityResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

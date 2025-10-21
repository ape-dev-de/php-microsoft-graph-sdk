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
    /**
     * Available select fields for ExternalConnectorsExternalActivityResult
     */
    public const FIELD_ERROR = 'error';

    /**
     * Select specific ExternalConnectorsExternalActivityResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

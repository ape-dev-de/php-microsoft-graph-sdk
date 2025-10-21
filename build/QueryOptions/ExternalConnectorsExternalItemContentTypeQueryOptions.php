<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalItemContentType resources
 *
 * Available select fields:
 */
class ExternalConnectorsExternalItemContentTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsExternalItemContentType
     */

    /**
     * Select specific ExternalConnectorsExternalItemContentType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

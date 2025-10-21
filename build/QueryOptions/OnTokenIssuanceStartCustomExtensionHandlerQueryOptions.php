<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnTokenIssuanceStartCustomExtensionHandler resources
 *
 * Available select fields:
 */
class OnTokenIssuanceStartCustomExtensionHandlerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnTokenIssuanceStartCustomExtensionHandler
     */

    /**
     * Select specific OnTokenIssuanceStartCustomExtensionHandler properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

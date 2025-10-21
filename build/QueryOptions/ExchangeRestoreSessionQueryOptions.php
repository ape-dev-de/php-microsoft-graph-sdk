<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExchangeRestoreSession resources
 *
 * Available select fields:
 */
class ExchangeRestoreSessionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExchangeRestoreSession
     */

    /**
     * Select specific ExchangeRestoreSession properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnTokenIssuanceStartListener resources
 *
 * Available select fields:
 * - handler
 */
class OnTokenIssuanceStartListenerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnTokenIssuanceStartListener
     */
    public const FIELD_HANDLER = 'handler';

    /**
     * Select specific OnTokenIssuanceStartListener properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

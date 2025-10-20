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
    public const FIELD_HANDLER = 'handler';

    /**
     * Select specific OnTokenIssuanceStartListener properties
     * 
     * @param array<string> $select Use OnTokenIssuanceStartListenerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnAuthenticationMethodLoadStartListener resources
 *
 * Available select fields:
 * - handler
 */
class OnAuthenticationMethodLoadStartListenerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnAuthenticationMethodLoadStartListener
     */
    public const FIELD_HANDLER = 'handler';

    /**
     * Select specific OnAuthenticationMethodLoadStartListener properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

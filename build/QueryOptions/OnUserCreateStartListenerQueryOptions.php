<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnUserCreateStartListener resources
 *
 * Available select fields:
 * - handler
 */
class OnUserCreateStartListenerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnUserCreateStartListener
     */
    public const FIELD_HANDLER = 'handler';

    /**
     * Select specific OnUserCreateStartListener properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

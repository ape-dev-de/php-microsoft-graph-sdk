<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PersistentBrowserSessionControl resources
 *
 * Available select fields:
 * - mode
 */
class PersistentBrowserSessionControlQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PersistentBrowserSessionControl
     */
    public const FIELD_MODE = 'mode';

    /**
     * Select specific PersistentBrowserSessionControl properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

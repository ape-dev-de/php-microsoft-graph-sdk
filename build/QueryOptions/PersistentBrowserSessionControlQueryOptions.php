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
    public const FIELD_MODE = 'mode';

    /**
     * Select specific PersistentBrowserSessionControl properties
     * 
     * @param array<string> $select Use PersistentBrowserSessionControlQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

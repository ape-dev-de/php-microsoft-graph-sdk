<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUniversalAppXContainedAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsUniversalAppXContainedAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsUniversalAppXContainedAppCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsUniversalAppXContainedAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

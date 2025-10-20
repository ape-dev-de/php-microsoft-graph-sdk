<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsWebAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsWebAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsWebAppCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsWebAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

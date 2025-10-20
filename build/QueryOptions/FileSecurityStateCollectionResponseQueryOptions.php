<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FileSecurityStateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class FileSecurityStateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific FileSecurityStateCollectionResponse properties
     * 
     * @param array<string> $select Use FileSecurityStateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

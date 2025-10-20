<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharePointRestoreSessionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SharePointRestoreSessionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SharePointRestoreSessionCollectionResponse properties
     * 
     * @param array<string> $select Use SharePointRestoreSessionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

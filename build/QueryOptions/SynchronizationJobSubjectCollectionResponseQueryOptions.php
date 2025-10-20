<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationJobSubjectCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SynchronizationJobSubjectCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SynchronizationJobSubjectCollectionResponse properties
     * 
     * @param array<string> $select Use SynchronizationJobSubjectCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

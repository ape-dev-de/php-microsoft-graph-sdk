<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationLinkedObjects resources
 *
 * Available select fields:
 * - manager
 * - members
 * - owners
 */
class SynchronizationLinkedObjectsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationLinkedObjects
     */
    public const FIELD_MANAGER = 'manager';
    public const FIELD_MEMBERS = 'members';
    public const FIELD_OWNERS = 'owners';

    /**
     * Select specific SynchronizationLinkedObjects properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

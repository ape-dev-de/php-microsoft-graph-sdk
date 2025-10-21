<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationJobSubject resources
 *
 * Available select fields:
 * - links
 * - objectId
 * - objectTypeName
 */
class SynchronizationJobSubjectQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationJobSubject
     */
    public const FIELD_LINKS = 'links';
    public const FIELD_OBJECT_ID = 'objectId';
    public const FIELD_OBJECT_TYPE_NAME = 'objectTypeName';

    /**
     * Select specific SynchronizationJobSubject properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

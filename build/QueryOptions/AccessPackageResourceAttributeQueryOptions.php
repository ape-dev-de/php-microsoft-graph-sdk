<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageResourceAttribute resources
 *
 * Available select fields:
 * - destination
 * - isEditable
 * - isPersistedOnAssignmentRemoval
 * - name
 * - source
 */
class AccessPackageResourceAttributeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageResourceAttribute
     */
    public const FIELD_DESTINATION = 'destination';
    public const FIELD_IS_EDITABLE = 'isEditable';
    public const FIELD_IS_PERSISTED_ON_ASSIGNMENT_REMOVAL = 'isPersistedOnAssignmentRemoval';
    public const FIELD_NAME = 'name';
    public const FIELD_SOURCE = 'source';

    /**
     * Select specific AccessPackageResourceAttribute properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

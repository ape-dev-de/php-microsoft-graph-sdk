<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppOperation resources
 *
 * Available select fields:
 * - displayName
 * - lastModifiedDateTime
 * - state
 * - version
 */
class ManagedAppOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppOperation
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_STATE = 'state';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific ManagedAppOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

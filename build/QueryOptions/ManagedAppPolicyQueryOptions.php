<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ManagedAppPolicy resources
 *
 * Available select fields:
 * - createdDateTime
 * - description
 * - displayName
 * - lastModifiedDateTime
 * - version
 */
class ManagedAppPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ManagedAppPolicy
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific ManagedAppPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

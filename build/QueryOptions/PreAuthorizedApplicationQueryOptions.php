<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PreAuthorizedApplication resources
 *
 * Available select fields:
 * - appId
 * - delegatedPermissionIds
 */
class PreAuthorizedApplicationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PreAuthorizedApplication
     */
    public const FIELD_APP_ID = 'appId';
    public const FIELD_DELEGATED_PERMISSION_IDS = 'delegatedPermissionIds';

    /**
     * Select specific PreAuthorizedApplication properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

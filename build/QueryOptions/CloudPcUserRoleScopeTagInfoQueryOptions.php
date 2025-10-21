<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcUserRoleScopeTagInfo resources
 *
 * Available select fields:
 * - displayName
 * - roleScopeTagId
 */
class CloudPcUserRoleScopeTagInfoQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CloudPcUserRoleScopeTagInfo
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ROLE_SCOPE_TAG_ID = 'roleScopeTagId';

    /**
     * Select specific CloudPcUserRoleScopeTagInfo properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

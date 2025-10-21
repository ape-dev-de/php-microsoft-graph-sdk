<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceCustomTaskExtension resources
 *
 * Available select fields:
 * - callbackConfiguration
 * - createdDateTime
 * - lastModifiedDateTime
 * - createdBy
 * - lastModifiedBy
 */
class IdentityGovernanceCustomTaskExtensionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceCustomTaskExtension
     */
    public const FIELD_CALLBACK_CONFIGURATION = 'callbackConfiguration';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';

    /**
     * Select specific IdentityGovernanceCustomTaskExtension properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

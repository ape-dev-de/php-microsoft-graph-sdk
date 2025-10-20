<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentWorkflowExtension resources
 *
 * Available select fields:
 * - callbackConfiguration
 * - createdBy
 * - createdDateTime
 * - lastModifiedBy
 * - lastModifiedDateTime
 */
class AccessPackageAssignmentWorkflowExtensionQueryOptions extends QueryOptions
{
    public const FIELD_CALLBACK_CONFIGURATION = 'callbackConfiguration';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific AccessPackageAssignmentWorkflowExtension properties
     * 
     * @param array<string> $select Use AccessPackageAssignmentWorkflowExtensionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

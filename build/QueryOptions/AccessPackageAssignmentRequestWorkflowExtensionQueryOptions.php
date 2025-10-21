<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentRequestWorkflowExtension resources
 *
 * Available select fields:
 * - callbackConfiguration
 * - createdBy
 * - createdDateTime
 * - lastModifiedBy
 * - lastModifiedDateTime
 */
class AccessPackageAssignmentRequestWorkflowExtensionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageAssignmentRequestWorkflowExtension
     */
    public const FIELD_CALLBACK_CONFIGURATION = 'callbackConfiguration';
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_LAST_MODIFIED_BY = 'lastModifiedBy';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';

    /**
     * Select specific AccessPackageAssignmentRequestWorkflowExtension properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

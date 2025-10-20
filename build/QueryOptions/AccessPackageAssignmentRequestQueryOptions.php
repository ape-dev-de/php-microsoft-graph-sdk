<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignmentRequest resources
 *
 * Available select fields:
 * - answers
 * - completedDateTime
 * - createdDateTime
 * - customExtensionCalloutInstances
 * - justification
 * - requestType
 * - schedule
 * - state
 * - status
 * - accessPackage
 * - assignment
 * - requestor
 */
class AccessPackageAssignmentRequestQueryOptions extends QueryOptions
{
    public const FIELD_ANSWERS = 'answers';
    public const FIELD_COMPLETED_DATE_TIME = 'completedDateTime';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_CUSTOM_EXTENSION_CALLOUT_INSTANCES = 'customExtensionCalloutInstances';
    public const FIELD_JUSTIFICATION = 'justification';
    public const FIELD_REQUEST_TYPE = 'requestType';
    public const FIELD_SCHEDULE = 'schedule';
    public const FIELD_STATE = 'state';
    public const FIELD_STATUS = 'status';
    public const FIELD_ACCESS_PACKAGE = 'accessPackage';
    public const FIELD_ASSIGNMENT = 'assignment';
    public const FIELD_REQUESTOR = 'requestor';

    /**
     * Select specific AccessPackageAssignmentRequest properties
     * 
     * @param array<string> $select Use AccessPackageAssignmentRequestQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

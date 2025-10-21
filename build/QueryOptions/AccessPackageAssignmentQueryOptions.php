<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAssignment resources
 *
 * Available select fields:
 * - customExtensionCalloutInstances
 * - expiredDateTime
 * - schedule
 * - state
 * - status
 * - accessPackage
 * - assignmentPolicy
 * - target
 */
class AccessPackageAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessPackageAssignment
     */
    public const FIELD_CUSTOM_EXTENSION_CALLOUT_INSTANCES = 'customExtensionCalloutInstances';
    public const FIELD_EXPIRED_DATE_TIME = 'expiredDateTime';
    public const FIELD_SCHEDULE = 'schedule';
    public const FIELD_STATE = 'state';
    public const FIELD_STATUS = 'status';
    public const FIELD_ACCESS_PACKAGE = 'accessPackage';
    public const FIELD_ASSIGNMENT_POLICY = 'assignmentPolicy';
    public const FIELD_TARGET = 'target';

    /**
     * Select specific AccessPackageAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

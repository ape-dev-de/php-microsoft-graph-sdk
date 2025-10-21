<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SensitivityLabelAssignment resources
 *
 * Available select fields:
 * - assignmentMethod
 * - sensitivityLabelId
 * - tenantId
 */
class SensitivityLabelAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SensitivityLabelAssignment
     */
    public const FIELD_ASSIGNMENT_METHOD = 'assignmentMethod';
    public const FIELD_SENSITIVITY_LABEL_ID = 'sensitivityLabelId';
    public const FIELD_TENANT_ID = 'tenantId';

    /**
     * Select specific SensitivityLabelAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

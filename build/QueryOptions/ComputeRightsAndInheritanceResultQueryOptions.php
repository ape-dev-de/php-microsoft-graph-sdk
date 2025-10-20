<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ComputeRightsAndInheritanceResult resources
 *
 * Available select fields:
 * - contentRights
 * - inheritedLabel
 * - sensitivityLabels
 */
class ComputeRightsAndInheritanceResultQueryOptions extends QueryOptions
{
    public const FIELD_CONTENT_RIGHTS = 'contentRights';
    public const FIELD_INHERITED_LABEL = 'inheritedLabel';
    public const FIELD_SENSITIVITY_LABELS = 'sensitivityLabels';

    /**
     * Select specific ComputeRightsAndInheritanceResult properties
     * 
     * @param array<string> $select Use ComputeRightsAndInheritanceResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationModuleResource resources
 *
 * Available select fields:
 * - resource
 */
class EducationModuleResourceQueryOptions extends QueryOptions
{
    public const FIELD_RESOURCE = 'resource';

    /**
     * Select specific EducationModuleResource properties
     * 
     * @param array<string> $select Use EducationModuleResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

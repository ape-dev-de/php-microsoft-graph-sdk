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
    /**
     * Available select fields for EducationModuleResource
     */
    public const FIELD_RESOURCE = 'resource';

    /**
     * Select specific EducationModuleResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanDescriptorBase resources
 *
 * Available select fields:
 * - displayName
 */
class SecurityFilePlanDescriptorBaseQueryOptions extends QueryOptions
{
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific SecurityFilePlanDescriptorBase properties
     * 
     * @param array<string> $select Use SecurityFilePlanDescriptorBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

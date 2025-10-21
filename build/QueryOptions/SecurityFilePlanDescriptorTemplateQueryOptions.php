<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFilePlanDescriptorTemplate resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - displayName
 */
class SecurityFilePlanDescriptorTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityFilePlanDescriptorTemplate
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific SecurityFilePlanDescriptorTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

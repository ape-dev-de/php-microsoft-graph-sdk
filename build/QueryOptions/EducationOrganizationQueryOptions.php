<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationOrganization resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - externalSource
 * - externalSourceDetail
 */
class EducationOrganizationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationOrganization
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXTERNAL_SOURCE = 'externalSource';
    public const FIELD_EXTERNAL_SOURCE_DETAIL = 'externalSourceDetail';

    /**
     * Select specific EducationOrganization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

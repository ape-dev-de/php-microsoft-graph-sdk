<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationExternalResource resources
 *
 * Available select fields:
 * - webUrl
 */
class EducationExternalResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationExternalResource
     */
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific EducationExternalResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

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
    public const FIELD_WEB_URL = 'webUrl';

    /**
     * Select specific EducationExternalResource properties
     * 
     * @param array<string> $select Use EducationExternalResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

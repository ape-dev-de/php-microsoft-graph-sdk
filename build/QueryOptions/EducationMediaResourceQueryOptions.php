<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationMediaResource resources
 *
 * Available select fields:
 * - fileUrl
 */
class EducationMediaResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationMediaResource
     */
    public const FIELD_FILE_URL = 'fileUrl';

    /**
     * Select specific EducationMediaResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

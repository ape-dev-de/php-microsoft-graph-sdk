<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationWordResource resources
 *
 * Available select fields:
 * - fileUrl
 */
class EducationWordResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationWordResource
     */
    public const FIELD_FILE_URL = 'fileUrl';

    /**
     * Select specific EducationWordResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

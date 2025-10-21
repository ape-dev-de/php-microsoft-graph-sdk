<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationExcelResource resources
 *
 * Available select fields:
 * - fileUrl
 */
class EducationExcelResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EducationExcelResource
     */
    public const FIELD_FILE_URL = 'fileUrl';

    /**
     * Select specific EducationExcelResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

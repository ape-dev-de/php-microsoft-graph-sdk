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
    public const FIELD_FILE_URL = 'fileUrl';

    /**
     * Select specific EducationWordResource properties
     * 
     * @param array<string> $select Use EducationWordResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

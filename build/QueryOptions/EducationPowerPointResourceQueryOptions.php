<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EducationPowerPointResource resources
 *
 * Available select fields:
 * - fileUrl
 */
class EducationPowerPointResourceQueryOptions extends QueryOptions
{
    public const FIELD_FILE_URL = 'fileUrl';

    /**
     * Select specific EducationPowerPointResource properties
     * 
     * @param array<string> $select Use EducationPowerPointResourceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

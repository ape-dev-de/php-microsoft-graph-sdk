<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10SecureAssessmentConfigurationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class Windows10SecureAssessmentConfigurationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific Windows10SecureAssessmentConfigurationCollectionResponse properties
     * 
     * @param array<string> $select Use Windows10SecureAssessmentConfigurationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

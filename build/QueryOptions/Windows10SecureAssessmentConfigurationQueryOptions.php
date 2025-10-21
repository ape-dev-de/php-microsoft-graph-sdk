<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10SecureAssessmentConfiguration resources
 *
 * Available select fields:
 */
class Windows10SecureAssessmentConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10SecureAssessmentConfiguration
     */

    /**
     * Select specific Windows10SecureAssessmentConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

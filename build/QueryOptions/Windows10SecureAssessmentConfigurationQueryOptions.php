<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10SecureAssessmentConfiguration resources
 *
 * Available select fields:
 * - allowPrinting
 * - allowScreenCapture
 * - allowTextSuggestion
 * - configurationAccount
 * - launchUri
 */
class Windows10SecureAssessmentConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_PRINTING = 'allowPrinting';
    public const FIELD_ALLOW_SCREEN_CAPTURE = 'allowScreenCapture';
    public const FIELD_ALLOW_TEXT_SUGGESTION = 'allowTextSuggestion';
    public const FIELD_CONFIGURATION_ACCOUNT = 'configurationAccount';
    public const FIELD_LAUNCH_URI = 'launchUri';

    /**
     * Select specific Windows10SecureAssessmentConfiguration properties
     * 
     * @param array<string> $select Use Windows10SecureAssessmentConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

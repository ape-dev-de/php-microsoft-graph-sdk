<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10EnrollmentCompletionPageConfiguration resources
 *
 * Available select fields:
 * - allowNonBlockingAppInstallation
 */
class Windows10EnrollmentCompletionPageConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_ALLOW_NON_BLOCKING_APP_INSTALLATION = 'allowNonBlockingAppInstallation';

    /**
     * Select specific Windows10EnrollmentCompletionPageConfiguration properties
     * 
     * @param array<string> $select Use Windows10EnrollmentCompletionPageConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

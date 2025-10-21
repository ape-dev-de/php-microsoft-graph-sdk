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
    /**
     * Available select fields for Windows10EnrollmentCompletionPageConfiguration
     */
    public const FIELD_ALLOW_NON_BLOCKING_APP_INSTALLATION = 'allowNonBlockingAppInstallation';

    /**
     * Select specific Windows10EnrollmentCompletionPageConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

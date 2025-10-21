<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AgreementFileLocalization resources
 *
 * Available select fields:
 * - versions
 */
class AgreementFileLocalizationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AgreementFileLocalization
     */
    public const FIELD_VERSIONS = 'versions';

    /**
     * Select specific AgreementFileLocalization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

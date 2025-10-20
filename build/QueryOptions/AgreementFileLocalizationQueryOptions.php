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
    public const FIELD_VERSIONS = 'versions';

    /**
     * Select specific AgreementFileLocalization properties
     * 
     * @param array<string> $select Use AgreementFileLocalizationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

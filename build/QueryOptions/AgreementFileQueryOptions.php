<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AgreementFile resources
 *
 * Available select fields:
 * - localizations
 */
class AgreementFileQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AgreementFile
     */
    public const FIELD_LOCALIZATIONS = 'localizations';

    /**
     * Select specific AgreementFile properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

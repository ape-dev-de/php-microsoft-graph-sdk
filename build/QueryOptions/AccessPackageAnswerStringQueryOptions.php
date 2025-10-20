<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessPackageAnswerString resources
 *
 * Available select fields:
 * - value
 */
class AccessPackageAnswerStringQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageAnswerString properties
     * 
     * @param array<string> $select Use AccessPackageAnswerStringQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

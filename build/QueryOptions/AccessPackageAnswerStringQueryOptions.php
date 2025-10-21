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
    /**
     * Available select fields for AccessPackageAnswerString
     */
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AccessPackageAnswerString properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

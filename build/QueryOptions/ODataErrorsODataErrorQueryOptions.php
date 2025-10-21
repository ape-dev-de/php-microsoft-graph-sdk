<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ODataErrorsODataError resources
 *
 * Available select fields:
 * - error
 */
class ODataErrorsODataErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ODataErrorsODataError
     */
    public const FIELD_ERROR = 'error';

    /**
     * Select specific ODataErrorsODataError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

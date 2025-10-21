<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ODataErrorsInnerError resources
 *
 * Available select fields:
 * - request-id
 * - client-request-id
 * - date
 */
class ODataErrorsInnerErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ODataErrorsInnerError
     */
    public const FIELD_REQUEST_ID = 'request-id';
    public const FIELD_CLIENT_REQUEST_ID = 'client-request-id';
    public const FIELD_DATE = 'date';

    /**
     * Select specific ODataErrorsInnerError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

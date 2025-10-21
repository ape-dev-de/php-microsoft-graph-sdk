<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ODataErrorsMainError resources
 *
 * Available select fields:
 * - code
 * - message
 * - target
 * - details
 * - innerError
 */
class ODataErrorsMainErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ODataErrorsMainError
     */
    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';
    public const FIELD_TARGET = 'target';
    public const FIELD_DETAILS = 'details';
    public const FIELD_INNER_ERROR = 'innerError';

    /**
     * Select specific ODataErrorsMainError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

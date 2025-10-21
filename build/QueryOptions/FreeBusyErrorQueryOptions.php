<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FreeBusyError resources
 *
 * Available select fields:
 * - message
 * - responseCode
 */
class FreeBusyErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FreeBusyError
     */
    public const FIELD_MESSAGE = 'message';
    public const FIELD_RESPONSE_CODE = 'responseCode';

    /**
     * Select specific FreeBusyError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

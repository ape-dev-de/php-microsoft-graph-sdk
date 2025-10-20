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
    public const FIELD_MESSAGE = 'message';
    public const FIELD_RESPONSE_CODE = 'responseCode';

    /**
     * Select specific FreeBusyError properties
     * 
     * @param array<string> $select Use FreeBusyErrorQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

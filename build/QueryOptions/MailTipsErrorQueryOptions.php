<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailTipsError resources
 *
 * Available select fields:
 * - code
 * - message
 */
class MailTipsErrorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MailTipsError
     */
    public const FIELD_CODE = 'code';
    public const FIELD_MESSAGE = 'message';

    /**
     * Select specific MailTipsError properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

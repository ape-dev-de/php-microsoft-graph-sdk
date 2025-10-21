<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailTipsType resources
 *
 * Available select fields:
 */
class MailTipsTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MailTipsType
     */

    /**
     * Select specific MailTipsType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

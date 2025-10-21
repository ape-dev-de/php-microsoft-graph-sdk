<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailDestinationRoutingReason resources
 *
 * Available select fields:
 */
class MailDestinationRoutingReasonQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MailDestinationRoutingReason
     */

    /**
     * Select specific MailDestinationRoutingReason properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

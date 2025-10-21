<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnOtpSendHandler resources
 *
 * Available select fields:
 */
class OnOtpSendHandlerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnOtpSendHandler
     */

    /**
     * Select specific OnOtpSendHandler properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

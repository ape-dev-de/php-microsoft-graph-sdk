<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnEmailOtpSendListener resources
 *
 * Available select fields:
 */
class OnEmailOtpSendListenerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnEmailOtpSendListener
     */

    /**
     * Select specific OnEmailOtpSendListener properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

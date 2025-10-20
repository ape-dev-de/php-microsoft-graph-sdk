<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnEmailOtpSendListener resources
 *
 * Available select fields:
 * - handler
 */
class OnEmailOtpSendListenerQueryOptions extends QueryOptions
{
    public const FIELD_HANDLER = 'handler';

    /**
     * Select specific OnEmailOtpSendListener properties
     * 
     * @param array<string> $select Use OnEmailOtpSendListenerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnEmailOtpSendListenerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnEmailOtpSendListenerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnEmailOtpSendListenerCollectionResponse properties
     * 
     * @param array<string> $select Use OnEmailOtpSendListenerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

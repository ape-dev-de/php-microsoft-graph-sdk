<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnOtpSendCustomExtensionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnOtpSendCustomExtensionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnOtpSendCustomExtensionCollectionResponse properties
     * 
     * @param array<string> $select Use OnOtpSendCustomExtensionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

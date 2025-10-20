<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RemoteAssistancePartnerCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RemoteAssistancePartnerCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RemoteAssistancePartnerCollectionResponse properties
     * 
     * @param array<string> $select Use RemoteAssistancePartnerCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

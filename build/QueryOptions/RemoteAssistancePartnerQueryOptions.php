<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RemoteAssistancePartner resources
 *
 * Available select fields:
 */
class RemoteAssistancePartnerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RemoteAssistancePartner
     */

    /**
     * Select specific RemoteAssistancePartner properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

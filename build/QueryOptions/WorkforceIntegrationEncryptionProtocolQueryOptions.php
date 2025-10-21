<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkforceIntegrationEncryptionProtocol resources
 *
 * Available select fields:
 */
class WorkforceIntegrationEncryptionProtocolQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkforceIntegrationEncryptionProtocol
     */

    /**
     * Select specific WorkforceIntegrationEncryptionProtocol properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

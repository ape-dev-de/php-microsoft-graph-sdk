<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkforceIntegrationEncryption resources
 *
 * Available select fields:
 * - protocol
 * - secret
 */
class WorkforceIntegrationEncryptionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkforceIntegrationEncryption
     */
    public const FIELD_PROTOCOL = 'protocol';
    public const FIELD_SECRET = 'secret';

    /**
     * Select specific WorkforceIntegrationEncryption properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

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
    public const FIELD_PROTOCOL = 'protocol';
    public const FIELD_SECRET = 'secret';

    /**
     * Select specific WorkforceIntegrationEncryption properties
     * 
     * @param array<string> $select Use WorkforceIntegrationEncryptionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

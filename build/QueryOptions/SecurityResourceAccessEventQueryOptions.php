<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityResourceAccessEvent resources
 *
 * Available select fields:
 * - accessDateTime
 * - accountId
 * - ipAddress
 * - resourceIdentifier
 */
class SecurityResourceAccessEventQueryOptions extends QueryOptions
{
    public const FIELD_ACCESS_DATE_TIME = 'accessDateTime';
    public const FIELD_ACCOUNT_ID = 'accountId';
    public const FIELD_IP_ADDRESS = 'ipAddress';
    public const FIELD_RESOURCE_IDENTIFIER = 'resourceIdentifier';

    /**
     * Select specific SecurityResourceAccessEvent properties
     * 
     * @param array<string> $select Use SecurityResourceAccessEventQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

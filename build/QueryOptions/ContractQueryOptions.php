<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Contract resources
 *
 * Available select fields:
 * - contractType
 * - customerId
 * - defaultDomainName
 * - displayName
 */
class ContractQueryOptions extends QueryOptions
{
    public const FIELD_CONTRACT_TYPE = 'contractType';
    public const FIELD_CUSTOMER_ID = 'customerId';
    public const FIELD_DEFAULT_DOMAIN_NAME = 'defaultDomainName';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific Contract properties
     * 
     * @param array<string> $select Use ContractQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

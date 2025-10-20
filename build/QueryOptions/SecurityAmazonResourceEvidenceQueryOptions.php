<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityAmazonResourceEvidence resources
 *
 * Available select fields:
 * - amazonAccountId
 * - amazonResourceId
 * - resourceName
 * - resourceType
 */
class SecurityAmazonResourceEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_AMAZON_ACCOUNT_ID = 'amazonAccountId';
    public const FIELD_AMAZON_RESOURCE_ID = 'amazonResourceId';
    public const FIELD_RESOURCE_NAME = 'resourceName';
    public const FIELD_RESOURCE_TYPE = 'resourceType';

    /**
     * Select specific SecurityAmazonResourceEvidence properties
     * 
     * @param array<string> $select Use SecurityAmazonResourceEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

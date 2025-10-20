<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceHealthIssuePostCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ServiceHealthIssuePostCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ServiceHealthIssuePostCollectionResponse properties
     * 
     * @param array<string> $select Use ServiceHealthIssuePostCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

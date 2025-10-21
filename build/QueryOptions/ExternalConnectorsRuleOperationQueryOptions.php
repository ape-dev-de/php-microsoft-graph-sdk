<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsRuleOperation resources
 *
 * Available select fields:
 */
class ExternalConnectorsRuleOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsRuleOperation
     */

    /**
     * Select specific ExternalConnectorsRuleOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

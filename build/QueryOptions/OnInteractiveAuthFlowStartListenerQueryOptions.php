<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnInteractiveAuthFlowStartListener resources
 *
 * Available select fields:
 * - handler
 */
class OnInteractiveAuthFlowStartListenerQueryOptions extends QueryOptions
{
    public const FIELD_HANDLER = 'handler';

    /**
     * Select specific OnInteractiveAuthFlowStartListener properties
     * 
     * @param array<string> $select Use OnInteractiveAuthFlowStartListenerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

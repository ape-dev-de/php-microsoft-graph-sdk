<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessagePolicyViolationVerdictDetailsTypes resources
 *
 * Available select fields:
 */
class ChatMessagePolicyViolationVerdictDetailsTypesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMessagePolicyViolationVerdictDetailsTypes
     */

    /**
     * Select specific ChatMessagePolicyViolationVerdictDetailsTypes properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

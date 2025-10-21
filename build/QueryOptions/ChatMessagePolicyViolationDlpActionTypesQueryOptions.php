<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessagePolicyViolationDlpActionTypes resources
 *
 * Available select fields:
 */
class ChatMessagePolicyViolationDlpActionTypesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMessagePolicyViolationDlpActionTypes
     */

    /**
     * Select specific ChatMessagePolicyViolationDlpActionTypes properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

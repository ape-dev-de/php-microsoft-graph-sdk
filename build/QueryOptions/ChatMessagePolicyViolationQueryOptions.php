<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessagePolicyViolation resources
 *
 * Available select fields:
 * - dlpAction
 * - justificationText
 * - policyTip
 * - userAction
 * - verdictDetails
 */
class ChatMessagePolicyViolationQueryOptions extends QueryOptions
{
    public const FIELD_DLP_ACTION = 'dlpAction';
    public const FIELD_JUSTIFICATION_TEXT = 'justificationText';
    public const FIELD_POLICY_TIP = 'policyTip';
    public const FIELD_USER_ACTION = 'userAction';
    public const FIELD_VERDICT_DETAILS = 'verdictDetails';

    /**
     * Select specific ChatMessagePolicyViolation properties
     * 
     * @param array<string> $select Use ChatMessagePolicyViolationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

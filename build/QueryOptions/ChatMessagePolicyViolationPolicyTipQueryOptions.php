<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessagePolicyViolationPolicyTip resources
 *
 * Available select fields:
 * - complianceUrl
 * - generalText
 * - matchedConditionDescriptions
 */
class ChatMessagePolicyViolationPolicyTipQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMessagePolicyViolationPolicyTip
     */
    public const FIELD_COMPLIANCE_URL = 'complianceUrl';
    public const FIELD_GENERAL_TEXT = 'generalText';
    public const FIELD_MATCHED_CONDITION_DESCRIPTIONS = 'matchedConditionDescriptions';

    /**
     * Select specific ChatMessagePolicyViolationPolicyTip properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MessageRule resources
 *
 * Available select fields:
 * - actions
 * - conditions
 * - displayName
 * - exceptions
 * - hasError
 * - isEnabled
 * - isReadOnly
 * - sequence
 */
class MessageRuleQueryOptions extends QueryOptions
{
    public const FIELD_ACTIONS = 'actions';
    public const FIELD_CONDITIONS = 'conditions';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EXCEPTIONS = 'exceptions';
    public const FIELD_HAS_ERROR = 'hasError';
    public const FIELD_IS_ENABLED = 'isEnabled';
    public const FIELD_IS_READ_ONLY = 'isReadOnly';
    public const FIELD_SEQUENCE = 'sequence';

    /**
     * Select specific MessageRule properties
     * 
     * @param array<string> $select Use MessageRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}

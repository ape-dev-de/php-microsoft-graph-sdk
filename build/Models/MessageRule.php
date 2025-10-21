<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessageRule
 */
class MessageRule
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Actions to be taken on a message when the corresponding conditions are fulfilled. */
        public ?string $actions = null,
        /** Conditions that when fulfilled trigger the corresponding actions for that rule. */
        public ?string $conditions = null,
        /** The display name of the rule. */
        public ?string $displayName = null,
        /** Exception conditions for the rule. */
        public ?string $exceptions = null,
        /** Indicates whether the rule is in an error condition. Read-only. */
        public ?bool $hasError = null,
        /** Indicates whether the rule is enabled to be applied to messages. */
        public ?bool $isEnabled = null,
        /** Indicates if the rule is read-only and cannot be modified or deleted by the rules REST API. */
        public ?bool $isReadOnly = null,
        /** Indicates the order in which the rule is executed, among other rules. */
        public ?float $sequence = null
    ) {}
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessageRule
 */
class MessageRule
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Actions to be taken on a message when the corresponding conditions are fulfilled.
     * @var MessageRuleActions|\stdClass|null
     */
    public mixed $actions = null;

    /** 
     * Conditions that when fulfilled trigger the corresponding actions for that rule.
     * @var MessageRulePredicates|\stdClass|null
     */
    public mixed $conditions = null;

    /** The display name of the rule. */
    public ?string $displayName = null;

    /** 
     * Exception conditions for the rule.
     * @var MessageRulePredicates|\stdClass|null
     */
    public mixed $exceptions = null;

    /** Indicates whether the rule is in an error condition. Read-only. */
    public ?bool $hasError = null;

    /** Indicates whether the rule is enabled to be applied to messages. */
    public ?bool $isEnabled = null;

    /** Indicates if the rule is read-only and cannot be modified or deleted by the rules REST API. */
    public ?bool $isReadOnly = null;

    /** Indicates the order in which the rule is executed, among other rules. */
    public ?float $sequence = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['actions'])) {
            $this->actions = is_array($data['actions']) ? new MessageRuleActions($data['actions']) : $data['actions'];
        }
        if (isset($data['conditions'])) {
            $this->conditions = is_array($data['conditions']) ? new MessageRulePredicates($data['conditions']) : $data['conditions'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['exceptions'])) {
            $this->exceptions = is_array($data['exceptions']) ? new MessageRulePredicates($data['exceptions']) : $data['exceptions'];
        }
        if (isset($data['hasError'])) {
            $this->hasError = $data['hasError'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['isReadOnly'])) {
            $this->isReadOnly = $data['isReadOnly'];
        }
        if (isset($data['sequence'])) {
            $this->sequence = $data['sequence'];
        }
    }
}

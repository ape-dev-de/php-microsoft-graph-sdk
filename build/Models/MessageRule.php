<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessageRule
 */
class MessageRule
{
    /**
     * Actions to be taken on a message when the corresponding conditions are fulfilled.
     */
    private ?string $actions;

    /**
     * Conditions that when fulfilled trigger the corresponding actions for that rule.
     */
    private ?string $conditions;

    /**
     * The display name of the rule.
     */
    private ?string $displayName;

    /**
     * Exception conditions for the rule.
     */
    private ?string $exceptions;

    /**
     * Indicates whether the rule is in an error condition. Read-only.
     */
    private ?bool $hasError;

    /**
     * Indicates whether the rule is enabled to be applied to messages.
     */
    private ?bool $isEnabled;

    /**
     * Indicates if the rule is read-only and cannot be modified or deleted by the rules REST API.
     */
    private ?bool $isReadOnly;

    /**
     * Indicates the order in which the rule is executed, among other rules.
     */
    private ?string $sequence;


    public function getActions(): ?string
    {
        return $this->actions;
    }

    public function setActions(?string $actions): self
    {
        $this->actions = $actions;
        return $this;
    }

    public function getConditions(): ?string
    {
        return $this->conditions;
    }

    public function setConditions(?string $conditions): self
    {
        $this->conditions = $conditions;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getExceptions(): ?string
    {
        return $this->exceptions;
    }

    public function setExceptions(?string $exceptions): self
    {
        $this->exceptions = $exceptions;
        return $this;
    }

    public function getHasError(): ?bool
    {
        return $this->hasError;
    }

    public function setHasError(?bool $hasError): self
    {
        $this->hasError = $hasError;
        return $this;
    }

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getIsReadOnly(): ?bool
    {
        return $this->isReadOnly;
    }

    public function setIsReadOnly(?bool $isReadOnly): self
    {
        $this->isReadOnly = $isReadOnly;
        return $this;
    }

    public function getSequence(): ?string
    {
        return $this->sequence;
    }

    public function setSequence(?string $sequence): self
    {
        $this->sequence = $sequence;
        return $this;
    }

}

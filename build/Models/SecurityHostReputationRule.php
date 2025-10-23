<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostReputationRule
 */
class SecurityHostReputationRule
{
    /** The description of the rule that gives more context. */
    public ?string $description = null;

    /** The name of the rule. */
    public ?string $name = null;

    /** Link to a web page with details related to this rule. */
    public ?string $relatedDetailsUrl = null;

    /**  */
    public ?SecurityHostReputationRuleSeverity $severity = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['relatedDetailsUrl'])) {
            $this->relatedDetailsUrl = $data['relatedDetailsUrl'];
        }
        if (isset($data['severity'])) {
            $this->severity = is_array($data['severity']) ? new SecurityHostReputationRuleSeverity($data['severity']) : $data['severity'];
        }
    }
}

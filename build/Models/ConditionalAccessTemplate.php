<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessTemplate
 */
class ConditionalAccessTemplate
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The user-friendly name of the template. */
    public ?string $description = null;

    /**  */
    public ?ConditionalAccessPolicyDetail $details = null;

    /** The user-friendly name of the template. */
    public ?string $name = null;

    /**  */
    public ?TemplateScenarios $scenarios = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['details'])) {
            $this->details = is_array($data['details']) ? new ConditionalAccessPolicyDetail($data['details']) : $data['details'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['scenarios'])) {
            $this->scenarios = is_array($data['scenarios']) ? new TemplateScenarios($data['scenarios']) : $data['scenarios'];
        }
    }
}

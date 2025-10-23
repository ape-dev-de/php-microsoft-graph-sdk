<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationQuestionBase
 */
class VirtualEventRegistrationQuestionBase
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Display name of the registration question. */
    public ?string $displayName = null;

    /** Indicates whether an answer to the question is required. The default value is false. */
    public ?bool $isRequired = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isRequired'])) {
            $this->isRequired = $data['isRequired'];
        }
    }
}

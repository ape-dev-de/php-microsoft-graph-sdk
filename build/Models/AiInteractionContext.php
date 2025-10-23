<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionContext
 */
class AiInteractionContext
{
    /**  */
    public ?string $contextReference = null;

    /**  */
    public ?string $contextType = null;

    /**  */
    public ?string $displayName = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['contextReference'])) {
            $this->contextReference = $data['contextReference'];
        }
        if (isset($data['contextType'])) {
            $this->contextType = $data['contextType'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
    }
}

<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CommsNotification
 */
class CommsNotification
{
    /**  */
    public ?ChangeType $changeType = null;

    /** URI of the resource that was changed. */
    public ?string $resourceUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['changeType'])) {
            $this->changeType = is_array($data['changeType']) ? new ChangeType($data['changeType']) : $data['changeType'];
        }
        if (isset($data['resourceUrl'])) {
            $this->resourceUrl = $data['resourceUrl'];
        }
    }
}

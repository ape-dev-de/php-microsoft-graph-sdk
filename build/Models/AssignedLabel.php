<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AssignedLabel
 */
class AssignedLabel
{
    /** The display name of the label. Read-only. */
    public ?string $displayName = null;

    /** The unique identifier of the label. */
    public ?string $labelId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['labelId'])) {
            $this->labelId = $data['labelId'];
        }
    }
}

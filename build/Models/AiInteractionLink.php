<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AiInteractionLink
 */
class AiInteractionLink
{
    /**  */
    public ?string $displayName = null;

    /**  */
    public ?string $linkType = null;

    /**  */
    public ?string $linkUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['linkType'])) {
            $this->linkType = $data['linkType'];
        }
        if (isset($data['linkUrl'])) {
            $this->linkUrl = $data['linkUrl'];
        }
    }
}

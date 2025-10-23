<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TabUpdatedEventMessageDetail
 */
class TabUpdatedEventMessageDetail
{
    /** 
     * Initiator of the event.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $initiator = null;

    /** Unique identifier of the tab. */
    public ?string $tabId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['initiator'])) {
            $this->initiator = $data['initiator'];
        }
        if (isset($data['tabId'])) {
            $this->tabId = $data['tabId'];
        }
    }
}

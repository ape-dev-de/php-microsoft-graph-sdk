<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PersistentBrowserSessionControl
 */
class PersistentBrowserSessionControl
{
    /** Specifies whether the session control is enabled. */
    public ?bool $isEnabled = null;

    /** 
     * Possible values are: always, never.
     * @var PersistentBrowserSessionMode|\stdClass|null
     */
    public mixed $mode = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['mode'])) {
            $this->mode = is_array($data['mode']) ? new PersistentBrowserSessionMode($data['mode']) : $data['mode'];
        }
    }
}

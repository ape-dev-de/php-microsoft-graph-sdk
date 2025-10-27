<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PersistentBrowserSessionControl
 */
class PersistentBrowserSessionControl
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Specifies whether the session control is enabled. */
    public ?bool $isEnabled = null;

    /** 
     * Possible values are: always, never.
     * @var PersistentBrowserSessionMode|\stdClass|null
     */
    public PersistentBrowserSessionMode|\stdClass|null $mode = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isEnabled'])) {
            $this->isEnabled = is_bool($data['isEnabled']) ? $data['isEnabled'] : (bool)$data['isEnabled'];
        }
        if (isset($data['mode'])) {
            $this->mode = is_string($data['mode']) ? PersistentBrowserSessionMode::tryFrom($data['mode']) : $data['mode'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}

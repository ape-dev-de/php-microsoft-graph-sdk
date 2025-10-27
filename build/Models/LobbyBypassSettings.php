<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LobbyBypassSettings
 */
class LobbyBypassSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Specifies whether or not to always let dial-in callers bypass the lobby. Optional. */
    public ?bool $isDialInBypassEnabled = null;

    /** 
     * Specifies the type of participants that are automatically admitted into a meeting, bypassing the lobby. Optional.
     * @var LobbyBypassScope|\stdClass|null
     */
    public LobbyBypassScope|\stdClass|null $scope = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isDialInBypassEnabled'])) {
            $this->isDialInBypassEnabled = is_bool($data['isDialInBypassEnabled']) ? $data['isDialInBypassEnabled'] : (bool)$data['isDialInBypassEnabled'];
        }
        if (isset($data['scope'])) {
            $this->scope = is_string($data['scope']) ? LobbyBypassScope::tryFrom($data['scope']) : $data['scope'];
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

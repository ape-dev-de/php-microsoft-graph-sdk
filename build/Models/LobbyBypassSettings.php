<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LobbyBypassSettings
 */
class LobbyBypassSettings
{
    /** Specifies whether or not to always let dial-in callers bypass the lobby. Optional. */
    public ?bool $isDialInBypassEnabled = null;

    /** 
     * Specifies the type of participants that are automatically admitted into a meeting, bypassing the lobby. Optional.
     * @var LobbyBypassScope|\stdClass|null
     */
    public mixed $scope = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isDialInBypassEnabled'])) {
            $this->isDialInBypassEnabled = $data['isDialInBypassEnabled'];
        }
        if (isset($data['scope'])) {
            $this->scope = is_array($data['scope']) ? new LobbyBypassScope($data['scope']) : $data['scope'];
        }
    }
}

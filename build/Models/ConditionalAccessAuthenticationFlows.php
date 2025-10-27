<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessAuthenticationFlows
 */
class ConditionalAccessAuthenticationFlows
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?ConditionalAccessTransferMethods $transferMethods = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['transferMethods'])) {
            $this->transferMethods = is_array($data['transferMethods']) ? new ConditionalAccessTransferMethods($data['transferMethods']) : $data['transferMethods'];
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

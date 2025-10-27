<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DlpActionInfo
 */
class DlpActionInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The type of DLP action. Possible value is restrictAccessAction.
     * @var DlpAction|\stdClass|null
     */
    public DlpAction|\stdClass|null $action = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['action'])) {
            $this->action = is_array($data['action']) ? new DlpAction($data['action']) : $data['action'];
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
